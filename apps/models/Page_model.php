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


	public function getList($parentID="0", $only_parent=false, $sname=""){
		$this->db->where("language ='".$this->config->item("language")."'");
		$this->db->where("parent_id", $parentID);
		$data =  $this->db->get("pages")->result();

		if(!$only_parent){
			$data2 = [];
			
			foreach ($data as $key => $value) {
				if($this->countChildren($value->id)){
				
				$value->children = new stdClass;
				
				$value->children->parent_name = ($sname ? $sname."-" : "").$value->title;
				$value->children->item = $this->getList($value->id, false, $value->title);
				}
				$data2[] = $value;
				
			}
			$data = $data2;
		}

		return $data;
	}

	private function countChildren($parent_id){
		$this->db->where("parent_id", $parent_id);
		$data =  $this->db->get("pages")->num_rows();
		return ($data > 0 ? true :  false);
	}

	public function getInfoContent($id=null){
		$this->db->where("id",$id);
		return $this->db->get("pages")->row();
	}

	public function getPageMenu($parentID="0", $target="header", $only_parent=false){
		$this->db->where("language ='".$this->config->item("language")."'");
		$this->db->where("parent_id", $parentID);
		if(is_array($target)){
			foreach ($target as $key => $value) {
				$this->db->where("in_menu ", $value);
			}
		}else{
			$this->db->where("in_menu ", $target);
		}
		
		$data =  $this->db->get("pages")->result();
		return $data;
	}


	public function getPageWithApss($parentID=0){
		$this->db->where("language ='".$this->config->item("language")."'");
		$this->db->where("parent_id", $parentID);
		$this->db->where("apps_display != ''");
		$data =  $this->db->get("pages")->result();

		

		return $data;
	}

	public function getContent($url){
		$this->db->where("url_rewrite",$url);
		$this->db->where("(language='' OR language='".$this->config->item("language")."')");
		return $this->db->get("pages")->row();
	}

	public function renderURL($arv, $id){
		$url = ($arv["url_rewrite"] ? $arv["url_rewrite"] : $arv["title"]);
		if($id){
			return CreateSlugs(url_title($url,'-',true));
		}else{

			return CreateSlugs(url_title($url,'-',true));
		}
	}


}