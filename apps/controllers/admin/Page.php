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
		$data = $this->page_model->getList();
		
		$this->view("page/manager",["data" => $data]);
	}

	public function create($id=null){
		$data = $this->page_model->getInfoContent($id);
		$apps = $this->template_model->application();
		$listParent = $this->page_model->getList();
		$listType = $this->content_model->getType();
		$this->view("page/create",["id" => $id, "data" => $data, "listType" => $listType,"apps" => $apps,"listParent" => $listParent]);
	}

	public function validate_post($id=null){
		$arvs = $this->input->post();
		if(!isset($arvs["title"]) || !$arvs["title"]){
			$this->setFlash(false);
		}else{
			$arv = [
				"title" => $arvs["title"],
				"url_rewrite" => $arvs["url_rewrite"],
				"content" => $arvs["content"],
				"site_keywords" => (@$arvs["site_keywords"] ? @$arvs["site_keywords"] : ""),
				"site_description" => (@$arvs["site_description"] ? @$arvs["site_description"] : ""),
				"thumbnail" => (@$arvs["thumbnail"] ? @$arvs["thumbnail"] : ""),
				"apps_display"	=> @$arvs["apps_display"],
				"in_menu"	=> @$arvs["in_menu"],
				"status"	=> @$arvs["status"],
				"parent_id"	=> @$arvs["parent_id"],
				"medium_url"	=> @$arvs["medium_url"],
				"website_service"	=> @$arvs["website_service"]

			];
			$this->page_model->CreateOrUpdate($arv, $id);
			
		}
		$this->setFlash(true);
		redirect(admin_url("page/manager"));
	}
}