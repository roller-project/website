<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Frontend {

	
	public function index()
	{
		$content = $this->template_model->getContent();
		$this->view('dashboard',["content" => $content]);
	}
}
