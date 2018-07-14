<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Frontend {
	public function index(){
		exit('No Support');
	}

	public function content($url=""){
		if(!$url)exit('No Support');
		$data = $this->page_model->getContent($url);
		$this->view("page",["data" => $data]);
	}
}
