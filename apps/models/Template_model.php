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
		$content = [];
		ob_start();
		foreach ($list as $key => $value) {
			if(file_exists(FCPATH.$value->paths)){
				$value->json = json_decode($value->options);
				
				$makeid = (isset($value->json->id) && $value->json->id ? $value->json->id : "block_".$value->id);
				$makeclass = (isset($value->json->class) && $value->json->class ? $value->json->class : "block_".$value->id);

				echo '<div data-json="json'.@$value->id.'" id="'.$makeid.'" class="'.$makeclass.'">';
				include FCPATH.$value->paths;
				echo '</div>';

				if(@$value->json->url){
					$content[] = $value->json->url;
				}
			}
		}
		$data = ob_get_clean();
		$vcon = [];
		foreach ($content as $key => $value) {
			$vcon[] = $this->content_model->getContent($value);
		}
		$data .= '<script type="">'.json_encode($vcon).'</script>';
		return $data;
	}


	public function getInfo($id){
		$this->db->where("id",$id);
		$row = $this->db->get("template")->row();
		if(!$row) return false;
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