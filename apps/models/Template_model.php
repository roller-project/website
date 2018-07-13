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

	public function getListBlock($plugins="", $status=null){
		$this->db->where("(language = '' OR language = '".config_item("language")."')");
		//$this->db->or_where("language",config_item("language"));
		//$this->db->where("stores","");
		//$this->db->or_where("stores",config_item("stores"));

		
		if($plugins){
			//$this->db->where("plugins",$plugins);
		}else{
			//$this->db->where("plugins","");
		}
		if($status){
			$this->db->where("status",$status);
		}

		$this->db->order_by("sorts","ASC");

		return $this->db->get("template")->result();
	}


	/*
	Display Content Client
	*/

	public function getContent($page="home",$ingoreJson=false, $getJsonArrayData = false){
		
		$content = [];
		$ingoreRead = false;
		ob_start();

		$file = FCPATH."resource/cache/{$page}-".$this->config->item("language").".php";
		if(file_exists($file) && !$ingoreJson && !$getJsonArrayData ){
			include $file;
			$ingoreRead = true;
			$filejson = FCPATH."resource/cache/{$page}-".$this->config->item("language")."-json.php";
			if(file_exists($filejson)){
				include_once $filejson;
			}
		}

		if(!$ingoreRead){
			$list = $this->getListBlock(null, 1);

			foreach ($list as $key => $value) {
				if(file_exists(FCPATH.$value->paths)){
					$value->json = json_decode($value->options);
					
					$makeid = (isset($value->json->id) && $value->json->id ? $value->json->id : "block_".$value->id);
					$makeclass = (isset($value->json->class) && $value->json->class ? $value->json->class : "block_".$value->id);

					echo '<div data-json="json'.@$value->id.'" id="'.$makeid.'" class="fixBlock '.$makeclass.'" data-background="'.@$value->json->backgroundurl.'">';
					

					if(@$value->json->svn){
						echo $this->bootstrap->svgLoad($value->json->svn,@$value->json->backgroundurl);
					}

					include FCPATH.$value->paths;
					
					echo '</div>';

					if(@$value->json->url){
						$content["json".$value->id] = $value->json->url;
					}
				}
			}
		}
		$data = ob_get_clean();
		$vcon = [];
		if($getJsonArrayData){
			return $content;
		}
		foreach ($content as $key => $value) {
			$vcon[$key] = $this->content_model->getContent($value);
		}
		//print_r(json_encode($vcon));exit();
		if(!$ingoreJson){
			$data .= '<script type="application/json" id="jsonContent">'.json_encode($vcon).'</script>';
		}

		
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
		$arv["status"] = 1;
		$this->db->insert("template", $arv);
		return $this->db->insert_id();
	}

	public function sorttable($id, $lv){
		$this->db->update("template",["sorts" => $lv],["id" => $id]);
	}

	/*
	On Off Status
	*/
	public function status($id){
		$data = $this->getInfo($id);
		$lv = 0;
		if($data->status == 1){
			$lv = 0;
		}else{
			$lv = 1;
		}
		$this->db->update("template",["status" => $lv],["id" => $id]);
		return $id;
	}



	public function removeBlock($id){
		$this->db->delete("template", ["id" => $id]);
		return true;
	}
}