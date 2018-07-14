<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Template extends Admin {

	function __construct()
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->view('dashboard');
	}

	public function manager(){
		$this->view("template/manager");
	}
	public function builder($id=0){
		$eff = ['bounce',
				'flash',
				'pulse',
				'rubberBand',
				'shake',
				'headShake',
				'swing',
				'tada',
				'wobble',
				'jello',
				'bounceIn',
				'bounceInDown',
				'bounceInLeft',
				'bounceInRight',
				'bounceInUp',
				'bounceOut',
				'bounceOutDown',
				'bounceOutLeft',
				'bounceOutRight',
				'bounceOutUp',
				'fadeIn',
				'fadeInDown',
				'fadeInDownBig',
				'fadeInLeft',
				'fadeInLeftBig',
				'fadeInRight',
				'fadeInRightBig',
				'fadeInUp',
				'fadeInUpBig',
				'fadeOut',
				'fadeOutDown',
				'fadeOutDownBig',
				'fadeOutLeft',
				'fadeOutLeftBig',
				'fadeOutRight',
				'fadeOutRightBig',
				'fadeOutUp',
				'fadeOutUpBig',
				'flipInX',
				'flipInY',
				'flipOutX',
				'flipOutY',
				'lightSpeedIn',
				'lightSpeedOut',
				'rotateIn',
				'rotateInDownLeft',
				'rotateInDownRight',
				'rotateInUpLeft',
				'rotateInUpRight',
				'rotateOut',
				'rotateOutDownLeft',
				'rotateOutDownRight',
				'rotateOutUpLeft',
				'rotateOutUpRight',
				'hinge',
				'jackInTheBox',
				'rollIn',
				'rollOut',
				'zoomIn',
				'zoomInDown',
				'zoomInLeft',
				'zoomInRight',
				'zoomInUp',
				'zoomOut',
				'zoomOutDown',
				'zoomOutLeft',
				'zoomOutRight',
				'zoomOutUp',
				'slideInDown',
				'slideInLeft',
				'slideInRight',
				'slideInUp',
				'slideOutDown',
				'slideOutLeft',
				'slideOutRight',
				'slideOutUp'];

		$getFileStores = $this->template_model->getFileStores();
		$getListBlock = $this->template_model->getListBlock();
		$getInfo = $this->template_model->getInfo($id);

		$append_file = "";
		if($getInfo){
			$file = basename($getInfo->paths);
			$options_file = str_replace($file, "options/{$file}", $getInfo->paths);

			
			if(file_exists(FCPATH.$options_file)){
				$append_file = FCPATH.$options_file;
			}
		}

		$this->view('template/builder',["eff" => $eff, "id" => $id,"getFileStores" => $getFileStores, "getListBlock" => $getListBlock, "getInfo" => $getInfo, "append_file" => $append_file]);
	}

	public function validate_update($id){
		$arv = [];
		$arv["name"] = $this->input->post("name");
		$arv["description"]	= $this->input->post("description");
		$arv["options"] = json_encode($this->input->post("json"));
		$data = $this->template_model->CreateOrUpdate($id,$arv);
		$this->setFlash($data);
		redirect(admin_url("template/builder/{$id}"));
	}

	public function addblock(){
		$paths = $this->input->get("paths");
		$name = ucfirst(str_replace('.php','',basename($paths)));
		$data = $this->template_model->addBlock($name, $paths);
		$this->setFlash($data);
		redirect(admin_url("template/builder/{$data}"));
	}

	public function sorttable(){
		$id = $this->input->post("item");
		foreach ($id as $key => $value) {
			$this->template_model->sorttable($value, $key);
		}
	}


	public function remove($id){
		$data = $this->template_model->removeBlock($id);
		$this->setFlash($data);
		redirect(admin_url("template/builder"));
	}


	public function status($id){
		$data = $this->template_model->status($id);
		$this->setFlash($data);
		redirect(admin_url("template/builder/{$id}"));
	}


	public function makecache($page="home",$id=null){
		$this->load->helper(['file']);
		$this->setFlash(true);
		$file = FCPATH."resource/cache/{$page}-".$this->config->item("language").".php";
		$file_json = FCPATH."resource/cache/{$page}-".$this->config->item("language")."-json.php";
		$content = $this->template_model->getContent($page,true);
		write_file($file, $content);

		$content = $this->template_model->getContent($page,true,true);
		$arv = [];
		$arv[] = '<?php';
		foreach ($content as $key => $value) {
			$arv[] = '$content["'.$key.'"] = "'.$value.'";';
		}
		write_file($file_json, implode($arv, "\n"));
		redirect(admin_url("template/builder/{$id}"));
	}
}
