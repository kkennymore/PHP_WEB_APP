<?php

class StoreController extends Controller {
    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new NewsPage();
    }

      public function page() {
          $this->data  = "Store Page";
    }

    public function view() {
        $this->data  = "Views ";
    }
}
