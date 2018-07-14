<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Frontend {

	
	public function index()
	{
		if(!$this->config->item("maintenance") == "on"){
			$this->maintenance();
		}else{
			$this->home();
		}
		
	}
	public function maintenance(){
		$this->setLayout(false)->view('maintenance',["content" => ""]);
	}

	public function home()
	{
		$data = $this->page_model->getContent("home");
		$content = "";
		if(isset($data->apps_display) && $data->apps_display != "" && file_exists(FCPATH.$data->apps_display)){
			ob_start();
			include_once FCPATH.$data->apps_display;
			$content = ob_get_clean();
			$infoApp = $this->template_model->getApplicationInfo($data->id);
			$content .= '<script type="application/json" id="jsonContent">'.json_encode($infoApp->json).'</script>';
		}else{
			$this->setLayout("content-layout");
		}
		$this->view('dashboard',["content" => $content, "data" => $data]);
	}
}
