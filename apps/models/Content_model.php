<?php

class Content_model extends CI_Model{
	
	public function CreateOrUpdate($arv=[], $id=""){
		$row = $this->getInfoContent($id);
		$arv["url_rewrite"] = $this->renderURL($arv, @$row->id);
		if($row){
			$arv["updated_at"] = date("Y-m-d h:i:s");
			$this->db->update("contents",$arv,["id" => $id]);
		}else{
			$arv["language"] = config_item("language");
			$this->db->insert("contents", $arv);
		}
	}

	public function listContent($type="blog", $language=false, $limit=20, $start=0, $sort="DESC", $sortBy="id", $filter="", $filterBy=""){
		$arv["language"] = config_item("language");
		if($language != "all"){
			$this->db->where("language",config_item("language"));
		}
		$this->db->where("type",$type);
		$this->db->limit($limit, $start);
		
		return $this->db->get("contents")->result();
	}

	public function pager(){

	}

	public function getContent($url=""){
		$query = $this->convertUrlQuery($url);
		$type = (@$query["type"] ? $query["type"] : "blog");
		$limit = (@$query["limit"] ? $query["limit"] : "20");
		$start = (@$query["start"] ? $query["start"] : "0");
		$sort = (@$query["sort"] ? $query["sort"] : "DESC");
		$sortBy = (@$query["sortBy"] ? $query["sortBy"] : "id");
		$filter = (@$query["filter"] ? $query["filter"] : "");
		$filterBy = (@$query["filterBy"] ? $query["filterBy"] : "title");
		$language = (@$query["language"] ? $query["language"] : config_item("language"));
		return $this->listContent($type, $language, $limit, $start, $sort, $sortBy, $filter, $filterBy);
	}

	private function convertUrlQuery($query) {
	    $queryParts = explode('&', $query);
	   
	    $params = array();
	    foreach ($queryParts as $param) {
	        $item = explode('=', $param);
	        $params[$item[0]] = $item[1];
	    }
	   
	    return $params;
	} 

	public function getInfoContent($id=null){

		$this->db->where("id",$id);
		return $this->db->get("contents")->row();
	}


	public function getInfoContentURL($url=null){
		if(!$url) return false;
		$this->db->where("url_rewrite",$url);
		return $this->db->get("contents")->row();
	}

	public function renderURL($arv, $id){
		$url = ($arv["url_rewrite"] ? $arv["url_rewrite"] : $arv["title"]);
		if($id){
			return makeSlugs(url_title($url,'-',true));
		}else{

			return makeSlugs(url_title($url,'-',true));
		}
	}

	/*
	Render Type
	*/
	public function getType(){
		$arv = ["blog" => "Blog's", "team" => "Development", "pool" => "Pool", "exchange" => "Exchange"];
		$arvs = [];
		if(config_item("post_type")){
			$ex = explode('|', config_item("post_type"));
			foreach ($ex as $key => $value) {
				$exF = explode('=', $value);
				$arvs[$exF[0]] = $exF[1];
			}
		}
		$arv = array_merge($arv, $arvs);
		return $arv;
	}


	public function remove($id=""){
		$this->db->delete("contents",["id" => $id]);
		return true;
	}
}