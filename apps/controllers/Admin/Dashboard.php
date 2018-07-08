<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Dashboard extends Admin {

	
	public function index()
	{
		$this->view('dashboard');
	}
	public function test(){
		echo "Khoa";
	}
}
