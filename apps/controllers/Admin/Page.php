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

	public function create($id=null){
		$this->view("page/create",["id" => $id]);
	}

	public function validate_post(){
		redirect(admin_url("page/manager"));
	}
}