<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Template extends Admin {

	
	public function index()
	{
		$this->view('dashboard');
	}
	public function manager(){
		$this->view('template/manager');
	}
}
