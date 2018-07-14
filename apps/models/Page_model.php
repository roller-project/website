<?php

class Page_model extends CI_Model{
	public function CreateOrUpdate($arv=[],$id=""){
		$row = $this->getInfoContent($id);
		$arv["url_rewrite"] = $this->renderURL($arv, @$row->id);
		if($row){
			$this->db->update("pages",$arv,["id" => $id]);
		}else{
			$arv["language"] = config_item("language");
			$this->db->insert("pages", $arv);
		}
	}



	public function getInfoContent($id=null){
		$this->db->where("id",$id);
		return $this->db->get("pages")->row();
	}


	public function renderURL($arv, $id){
		$url = ($arv["url_rewrite"] ? $arv["url_rewrite"] : $arv["title"]);
		if($id){
			return url_title($url,'-',true);
		}else{

			return url_title($url,'-',true);
		}
	}


}