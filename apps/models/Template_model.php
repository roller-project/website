<?php

class Template_model extends CI_Model{
	public function CreateOrUpdate($id="",$arv=[], $plugins=""){
		$arvs = [];
		$arvs["name"] = $arv["name"];
		$arvs["description"] = $arv["description"];
		$arvs["options"] = $arv["options"];
		$this->db->update("template",$arvs,["id" => $id]);
			
		return true;
	}

	public function getFileStores(){
		$file = glob(FCPATH."resource/blocks/*.php");
		$arv = [];
		foreach ($file as $key => $value) {
			$skey = ucfirst(str_replace('.php','',basename($value)));
			$arv[$skey] = str_replace(FCPATH, '', $value);
		}
		return $arv;
	}

	public function getListBlockStores(){

	}

	public function getListBlock($plugins=""){
		$this->db->where("language","");
		$this->db->or_where("language",config_item("language"));
		$this->db->where("stores","");
		$this->db->or_where("stores",config_item("stores"));

		
		if($plugins){
			$this->db->where("plugins",$plugins);
		}else{
			$this->db->where("plugins","");
		}
		$this->db->order_by("sorts","ASC");

		return $this->db->get("template")->result();
	}


	/*
	Display Content Client
	*/

	public function getContent(){
		$list = $this->getListBlock();
		ob_start();
		foreach ($list as $key => $value) {
			if(file_exists(FCPATH.$value->paths)){
				$value->json = json_decode($value->options);
				echo '<div data-json="'.@$value->json->url.'" id="block_'.$value->id.'">';
				include FCPATH.$value->paths;
				echo '</div>';
			}
		}
		$data = ob_get_clean();
		return $data;
	}


	public function getInfo($id){
		$this->db->where("id",$id);
		$row = $this->db->get("template")->row();
		$row->json = json_decode($row->options);
		return $row;
	}

	public function buildCache(){
		
	}


	public function addblock($name, $paths){
		$arv = [];
		$arv["name"] = $name;
		$arv["paths"] = $paths;
		$this->db->insert("template", $arv);
		return $this->db->insert_id();
	}
}