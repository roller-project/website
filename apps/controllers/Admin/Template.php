<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Template extends Admin {

	function __construct()
	{
		parent::__construct();
		$this->load->model("template_model");
	}
	
	public function index()
	{
		$this->view('dashboard');
	}
	public function manager(){
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

		
		$this->view('template/manager',["eff" => $eff]);
	}

	public function validate_update(){
		$arv = [];
		$arv["name"] = $this->input->post("name");
		$arv["options"] = json_encode($this->input->post("json"));
		$data = $this->template_model->CreateOrUpdate($arv);
		$this->setFlash($data);
	}
}
