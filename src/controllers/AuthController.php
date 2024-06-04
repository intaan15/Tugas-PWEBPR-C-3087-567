<?php

class AuthController extends BaseController{
    private $authModel;
    public function __construct()
    {
        $this->authModel = $this->model('AuthModel');
    }

    public function index() {
        $data = [
            'style' => '/css/awal.css',
            'title' => 'Login',
            'icon' => '/img/Baymax.png',
        ];
        $this->view('template/header', $data);
        $this->view('login/index', $data);
        $this->view('template/footer');
    }

    public function index2() {
        $data = [
            'style' => '/css/awal.css',
            'title' => 'Register',
            'icon' => '/img/Baymax.png',
        ];
        $this->view('template/header', $data);
        $this->view('regis/index', $data);
        $this->view('template/footer');
    }

    public function login() {
        $fields = [
            'username' => 'string | required | alphanumeric',
            'password' => 'string | required'
        ];

        $message = [];
        [$inputs, $errors] = $this->filter($_POST, $fields, $message);

        if ($errors) {
            Message::setFlash('error', 'Failed', $errors[0], $inputs);
            $this->redirect('login');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->authModel->getAll($username);
            
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION['id'] = $user['id'];
                    Message::setFlash('success', 'Welcome, ' . $user['username'], 'Login success' );

                    setcookie('username', $user['username'], time() + 86400, '/');
                    $this->redirect('staff');
                    }
            } else {
                Message::setFlash('error', 'Failed', 'Username or password wrong');
                $this->redirect('login');
            }
        } else {
            Message::setFlash('error', 'Failed', 'Username or password wrong');
            $this->redirect('login');
        }
    }

    public function register() {
        $fields = [
            'email' => 'string | required',
            'username' => 'string | required | alphanumeric',
            'password' => 'string | required'
        ];

        $message = [];
        [$inputs, $errors] = $this->filter($_POST, $fields, $message);

        if ($errors) {
            Message::setFlash('error', 'Failed', $errors[0], $inputs);
            $this->redirect('register');
        }

        $proc = $this->authModel->insert($inputs);
        if ($proc) {
            Message::setFlash('success', 'Successfully', $inputs['username'] . ' registered succesfully');
            $this->redirect('login');
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        setcookie('username', '', time() - 3600, '/');
        $this->redirect('login');
    }
}           
