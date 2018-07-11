<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Page extends Admin {

	function __construct()
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->view('dashboard');
	}

	public function manager(){
		$this->view("page/manager",["data" => []]);
	}
}