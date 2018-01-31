<?php
class ContactController extends Controller{
	public function __construct($data = array()){
		parent::__construct($data);
	}
	public function page(){
	 $this->data = "Hello from controller contact us page";
	}
}


?>