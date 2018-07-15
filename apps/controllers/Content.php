<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends Frontend {
	public function index(){
		exit('No Support');
	}

	public function detail($url=""){
		if(!$url)exit('No Support');
		$url =  urldecode($url);
		$data = $this->content_model->getInfoContentURL($url);
		$content = $this->content_model->listContent($data->type, 6,0,"DESC","created_at");
		$this->setLayout("content-layout");
		
		$this->view("content",["data" => $data, "content" => $content]);
	}
}
