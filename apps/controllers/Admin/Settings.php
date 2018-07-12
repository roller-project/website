<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Settings extends Admin {

	function __construct()
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->manager();
	}

	public function manager(){
		$this->view("config");
	}


	public function validate_update(){
		$config = $this->input->post("config");
		foreach ($config as $key => $value) {
			$this->settings_model->UpdateOrCreate($key, $value);
		}

		$this->setFlash(true);
		redirect(admin_url("settings/manager"));
	}
}