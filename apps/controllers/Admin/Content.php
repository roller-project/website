<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Content extends Admin {

	function __construct()
	{
		parent::__construct();
		
	}

	public function manager($type="blog", $id=0){
		$data = $this->content_model->listContent($type);
		$listType = $this->content_model->getType();
		print_r($listType);
		$this->view("content/manager",["type" => $type,"listtype" => ($listType ? $listType : []), "data" => $data, "pages" => ""]);
	}


	public function create($type="blog", $id=""){
		$getInfo = $this->content_model->getInfoContent($id);
		$this->view("content/create",["type" => $type,"id" => $id,"getInfo" => $getInfo]);
	}

	public function validate_post($type="blog", $id=""){
		$arv = [
			"title" => $this->input->post("title"),
			"url_rewrite" => $this->input->post("url_rewrite"),
			"content" => $this->input->post("content"),
			"thumbnail" => $this->input->post("thumbnail"),
			"type"	=> $type,
		];
		$data = $this->content_model->CreateOrUpdate($arv, $id);
		$this->setFlash($data);
		redirect(admin_url("content/manager/{$type}"));
	}


	public function delete($type="", $id=""){
		$this->content_model->remove($id);
		$this->setFlash(true);
		redirect(admin_url("content/manager/{$type}"));
	}
}