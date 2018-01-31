<?php
error_reporting(E_NOTICE ^ E_ALL);

class Admin_usersController extends Controller {
    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new HomePage();
    }

    public function admin_page() {
        $this->data = " ";
    }

    public function view() {
        $this->data = "Views ";
    }
    public function admin_users() {
        $this->data = "Views ";
    }
}