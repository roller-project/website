<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Frontend {

	
	public function index()
	{
		$this->view('dashboard');
	}
}
