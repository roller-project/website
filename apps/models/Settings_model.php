<?php


class Settings_model extends CI_Model{
	public function UpdateOrCreate($key, $value=null){
		if(is_array($value)){
			$value = json_encode($value);
		}
		$language = $this->config->item("language");
		
		$row = $this->checkExists($key, $language);
		if(isset($row->id)){
			$this->db->update("settings",["value_config" => $value], ["id" => $row->id]);
			$id = $row->id;
		}else{
			$this->db->insert("settings",["key_config" => $key, "value_config" => $value, "language" => $language]);
			$id = $this->db->insert_id();
		}

		return $id;

	}


	private function checkExists($key, $language=""){
		$this->db->where("key_config",$key);
		$this->db->where("(language='".$language."' OR globals = 'yes')");
		return $this->db->get("settings")->row();
	}



	public function getLanguage(){
		return $this->db->get("language")->result();
	}

	public function createetLanguage($folder){
		$this->db->insert("language",["folder" => $folder]);
	}
}