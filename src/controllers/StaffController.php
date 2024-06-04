<?php

class StaffController extends BaseController {
    private $staffModel;
    public function __construct()
    {
        $this->staffModel = $this->model('StaffModel');
    }

    public function index() {
        $data = [
            'style' => '/css/style.css',
            'title' => 'Dashboard',
            'icon' => '/img/Baymax.png',
            'AllStaff' => $this->staffModel->getAll()
        ];
        $this->view('template/header', $data);
        $this->view('staff/index', $data);
        $this->view('template/footer');
    }

    public function staffadd() {
        $data = [
            'style' => '/css/kedua.css',
            'title' => 'Add',
            'icon' => '/img/Baymax.png',
            'AllStaff' => $this->staffModel->getAll()
        ];
        $this->view('template/header', $data);
        $this->view('add/index', $data);
        $this->view('template/footer');
    }

    public function staffupdate($id) {
        $data = [
            'style' => '/css/kedua.css',
            'title' => 'Update',
            'icon' => '/img/Baymax.png',
            'staff' => $this->staffModel->getById($id)
        ];
        $this->view('template/header', $data);
        $this->view('update/index', $data);
        $this->view('template/footer');
    }

    public function staffaddproccess() {
        $fields = [
            'name' => 'string | required',
            'phone' => 'string | required | alphanumeric',
            'salary' => 'string | required',
        ];

        $message = [];
        [$inputs, $errors] = $this->filter($_POST, $fields, $message);

        if ($errors) {
            Message::setFlash('error', 'Failed', $errors[0], $inputs);
            $this->redirect('staff/add');
        }

        $proc = $this->staffModel->insert($inputs);
        if ($proc) {
            Message::setFlash('success', 'Successfully', $inputs['name'] . ' added');
            $this->redirect('staff');
        }
    }

    public function staffupdateproccess() {
        $fields = [
            'name' => 'string | required',
            'phone' => 'int | required',
            'salary' => 'string | required',
            'mode' => 'string',
            'id' => 'int'
        ];

        $message = [];
        [$inputs, $errors] = $this->filter($_POST, $fields, $message);

        if ($errors) {
            Message::setFlash('error', 'Failed', $errors[0], $inputs);
            $this->redirect('staff/update/' . $inputs['id']);
        }

        if ($inputs['mode'] == 'update') {
            $proc = $this->staffModel->update($inputs);
            if ($proc) {
                Message::setFlash('success', 'Successfully', $inputs['name'] . ' updated');
                $this->redirect('staff');
            } 
        } else {
            $proc = $this->staffModel->delete($inputs['id']);
            if ($proc) {
                Message::setFlash('success', 'Successfully', $inputs['name'] . ' deleted');
                $this->redirect('staff');
            }
        }
    }
}