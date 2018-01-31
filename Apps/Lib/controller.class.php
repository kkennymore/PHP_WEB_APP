<?php
class Controller{
	protected $data = array();
	protected $model;
	protected $params;
        protected $secure;
	
	public function getData(){
		return $this->data;
	}
	public function getModel(){
		return $this->model;
	}
	public function getParams(){
		return $this->params;
	}
        public function getSecure(){
            return $this->secure;
        }

        public function __construct($data = array()){
		$this->data = $data;
		$this->params = App::getRouter()->getParams();
	}
}
