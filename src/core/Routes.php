<?php

class Routes {
    public function run(){
        $router = new App();
        $router->setDefaultController('AuthController');
        $router->setDefaultMethod('index');

        $router->get('/login', ['AuthController','index']);
        $router->post('/loginproccess', ['AuthController','login']);
        $router->get('/register', ['AuthController','index2']);
        $router->post('/registerproccess', ['AuthController','register']);
        $router->get('/staff', ['StaffController','index']);
        $router->get('/staff/add', ['StaffController','staffadd']);
        $router->post('/staff/addproccess', ['StaffController','staffaddproccess']);
        $router->get('/staff/update', ['StaffController','staffupdate']);
        $router->post('/staff/updateproccess', ['StaffController','staffupdateproccess']);
        $router->get('/logout', ['AuthController','logout']);
        
        $router->run();
    }
}