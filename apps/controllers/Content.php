<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends Frontend {
	public function index(){
		exit('No Support');
	}

	public function detail($url=""){
		if(!$url)exit('No Support');
		$data = $this->page_model->getContent($url);
		$content = "";
		if($data->apps_display != "" && file_exists(FCPATH.$data->apps_display)){
			ob_start();
			include_once FCPATH.$data->apps_display;

			$content = ob_get_clean();
			$infoApp = $this->template_model->getApplicationInfo($data->id);
			$content .= '<script type="application/json" id="jsonContent2">'.json_encode($infoApp->json).'</script>';
		}else{
			$content = $this->content_model->listContent($data->data_type);
			$this->setLayout("content-layout");
		}
		
		$this->view("page",["data" => $data, "content" => $content]);
	}
}
