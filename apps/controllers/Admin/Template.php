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
	public function manager($id=0){
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
		$this->view('template/manager',["eff" => $eff, "id" => $id,"getFileStores" => $getFileStores, "getListBlock" => $getListBlock, "getInfo" => $getInfo]);
	}

	public function validate_update($id){
		$arv = [];
		$arv["name"] = $this->input->post("name");
		$arv["description"]	= $this->input->post("description");
		$arv["options"] = json_encode($this->input->post("json"));
		$data = $this->template_model->CreateOrUpdate($id,$arv);
		$this->setFlash($data);
		redirect(admin_url("template/manager/{$id}"));
	}

	public function addblock(){
		$paths = $this->input->get("paths");
		$name = ucfirst(str_replace('.php','',basename($paths)));
		$data =$this->template_model->addBlock($name, $paths);
		$this->setFlash($data);
		redirect(admin_url("template/manager/{$data}"));
	}
}
