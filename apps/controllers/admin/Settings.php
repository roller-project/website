<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Settings extends Admin {

	function __construct()
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->manager();
	}

	public function manager(){
		$this->view("config");
	}

	public function language(){
		$data = $this->settings_model->getLanguage();
		$this->view("language",["data" => $data]);
	}


	public function copydata($tolang){
		if($tolang == $this->config->item("language")){
			$this->setFlash(false);
			redirect(admin_url("settings/language"));
			exit();
		}


		/*
		Clear All Old Data
		*/

		$this->db->delete("pages",["language" => $tolang]);
		$this->db->delete("application",["language" => $tolang]);


		/*
		Start Copy New Data
		*/

		$this->db->where("language",$this->config->item("language"));
		$this->db->where("parent_id",0);
		
		$readpage = $this->db->get("pages")->result();
		foreach ($readpage as $key => $value) {
			$arv = [];
			foreach ($value as $key2 => $value2) {
				$arv[$key2] = $value2;
			}
			$arv["language"] = $tolang;
			

			$this->db->where("page_id", $arv["id"]);
			$this->db->where("language",$this->config->item("language"));
			$apps = $this->db->get("application")->result();
			unset($arv["id"]);

			$this->db->insert("pages", $arv);
			$pageid = $this->db->insert_id();

			foreach ($apps as $key2 => $value2) {
				$arvApps = [];
				foreach ($value2 as $key3 => $value3) {
					$arvApps[$key3] = $value3;
				}
				$arvApps["language"] = $tolang;
				$arvApps["page_id"] = $pageid;
				unset($arvApps["id"]);
				$this->db->insert("application",$arvApps);
			}
			
		}

		$this->setFlash(true);
		redirect(admin_url("settings/language"));

	}

	public function validate_update(){
		$config = $this->input->post("config");
		foreach ($config as $key => $value) {
			$this->settings_model->UpdateOrCreate($key, $value);
		}

		$this->setFlash(true);
		redirect(admin_url("settings/manager"));
	}

	public function validate_language(){
		$folder = strtolower(trim($this->input->post("folder")));
		$this->settings_model->createetLanguage($folder);
		$this->setFlash(true);
		redirect(admin_url("settings/language"));
	}
}