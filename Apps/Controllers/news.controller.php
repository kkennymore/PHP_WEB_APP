<?php

class NewsController extends Controller {
    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new NewsPage();
    }

      public function page() {
          $this->data  = "News Page";
    }

    public function view() {
        $this->data  = "Views ";
    }
    
    public function europe() {
        $this->data  = "Europe News ";
    }
    public function africa() {
        $this->data  = "Africa News ";
    }
    public function asia() {
        $this->data  = "Asia News ";
    }
    public function business() {
        $this->data  = "Business News ";
    }
    public function health() {
        $this->data  = "Health News ";
    }
    public function crime() {
        $this->data  = "Crime News ";
    }
    public function entertainment() {
        $this->data  = "Entertainment News ";
    }
    public function national() {
        $this->data  = "National News ";
    }
    public function event() {
        $this->data  = "Event News ";
    }
    public function sports() {
        $this->data  = "Sport News ";
    }
}
