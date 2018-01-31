<?php
error_reporting(E_NOTICE ^ E_ALL);
class UsersController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new NewsPage();
    }

    public function login() {
        $this->data = "Login Page";
    }

    public function register() {
        $this->data = "Register ";
    }

    public function logout() {
        session_start();
        session_destroy();
        pageRedirect('/'.urlArrayPos(1).'/users/login/');
    }

    public function admin_logout() {
        session_start();
        session_destroy();
        pageRedirect('/admin/');
    }

}
