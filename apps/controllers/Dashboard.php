<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Frontend {

	
	public function index()
	{
		if(!$this->isAdmin()){
			$this->maintenance();
		}else{
			$this->home();
		}
		
	}
	public function maintenance(){
		$this->setLayout(false)->view('maintenance',["content" => ""]);
	}

	public function home()
	{

		$content = $this->template_model->getContent();
		$this->view('dashboard',["content" => $content]);
	}
}
