<?php
class BaseController extends CI_Controller{
	public $layout = "";
	function __construct()
	{
		parent::__construct();
		$this->load->library(['session','email','user_agent','bootstrap','html2text']);
		$this->load->helper(['url','function','form','language','string','text']);
		$this->config();
		$this->load->model(["account_model","template_model","content_model","page_model","settings_model"]);

		if($this->input->get("language")){
			$this->session->set_userdata("language",$this->input->get("language"));
		}

		if($this->session->userdata("language")){
			$this->config->set_item("language",$this->session->userdata("language"));
		}
		
		if($this->config->item("autolanguage") == "yes"){
			$this->ipToLang();
		}

		$this->lang("globals");
		
	}

	/*
	Create Settings
	*/
	public function config($plugins=""){
		$language = "english";
		if($this->session->userdata("language")){
			$language = $this->session->userdata("language");
		}
		$this->db->where("language='".$language."' OR globals = 'yes'");
		
		$this->db->where("plugins",$plugins);
		$data = $this->db->get("settings")->result();
		foreach ($data as $key => $value) {
			$this->config->set_item($value->key_config, $value->value_config);
		}
	}

	/*
	Create flash report
	*/
	public function flash($key, $content=""){
		$this->session->set_flashdata($key, $content);
	}

	/*
	Set flash report yes/no
	*/
	public function setFlash($data=false, $key="update"){
		if($data){
			$this->flash("success",lang("success_{$key}"));
		}else{
			$this->flash("error",lang("error_{$key}"));
		}
	}

	public function get_flash(){
		$html = "";
		if($this->session->flashdata("error")){
			$html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>'.lang("error").'!</strong> '.$this->session->flashdata("error").'.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
		}

		if($this->session->flashdata("success")){
			$html = '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>'.lang("success").'!</strong> '.$this->session->flashdata("success").'.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
		}


		if($this->session->flashdata("warning")){
			$html = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>'.lang("warning").'!</strong> '.$this->session->flashdata("warning").'.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
		}


		return $html;
	}


	public function make_meta($arv=[]){
		$arvs = [];
		if(isset($arv["data"])){
			$arv = $arv["data"];
		}
		if(is_object($arv)){

			$arvs["title"] = (isset($arv->title) ? $arv->title : $this->config->item("site_name"));
			$arvs["description"] = (isset($arv->site_description) ? $arv->site_description : $this->config->item("site_description"));
			$arvs["keywords"] = (isset($arv->site_keywords) ? $arv->site_keywords : $this->config->item("site_keywords"));
			$arvs["author"] = (isset($arv->author) ? $arv->author : $this->config->item("site_author"));
			$arvs["thumbnail"] = (isset($arv->thumbnail) ? $arv->thumbnail : template_url("image/banner.jpg"));
		}else{
			$arvs["title"] = (isset($arv["title"]) ? $arv["title"] : $this->config->item("site_name"));
			$arvs["description"] = (isset($arv["description"]) ? $arv["description"] : $this->config->item("site_description"));
			$arvs["keywords"] = (isset($arv["keywords"]) ? $arv["keywords"] : $this->config->item("site_keywords"));
			$arvs["author"] = (isset($arv["author"]) ? $arv["author"] : $this->config->item("site_author"));
			$arvs["thumbnail"] = (isset($arv["thumbnail"]) ? $arv["thumbnail"] : template_url("image/banner.jpg"));
		}
		
		return $arvs;

	}
	/*
	Set Layout Loadding
	*/
	public function setLayout($layout=""){
		$this->layout = $layout;
		return $this;
	}

	/*
	Get Layout 
	*/
	public function getLayout(){
		$file = VIEWPATH.$this->layout.".php";
		if(file_exists($file)){
			return true;
		}
		return false;
	}

	/*
	Return View
	*/
	public function view($layout, $data=[]){
		$data = array_merge($data,["is_login" => $this->isLogin()]);
		if($this->getLayout()){

			$data2 = $this->load->view($layout, $data, true);
			$menu = $this->makeMenu();
			$footer = $this->makeMenu("footer");
			return $this->load->view($this->layout,["content" => $data2, "flash" => $this->get_flash(), "header" => $this->make_meta($data), "menu" => $menu,"footer" => $footer, "is_login" => $this->isLogin()]);
		}else{
			return $this->load->view($layout, $data);
		}
	}

	public function makeMenu($type="header"){
		$arv = [];
		$data = $this->page_model->getPageMenu(0,$type);
		foreach ($data as $key => $value) {
			
			$arv[] = [
				"link" => $value->url_rewrite.$this->config->item("url_prefix"),
				"name"	=> $value->title,
				"icons" => $value->menu_icons
			];
		}
		return $arv;
	}

	/*
	Access user
	*/

	public function isLogin(){
		if($this->session->userdata("is_login") && $this->account_model->validate_login()){
			return true;
		}else{
			return false;
		}
	}

	public function isAdmin(){
		if($this->session->userdata("is_login") && $this->account_model->validate_login()){
			return true;
		}else{
			return false;
		}
	}

	public function checkLogin(){
		if(!$this->isLogin()){
			redirect(store_url("account/login?ref=".current_url()));
			exit();
		}else{
			return true;
		}
		return false;
	}

	public function validate_security($die=false){
		if($this->security->get_csrf_hash()){
			return true;
		}else{
			die("Board Security not allow");
			return false;
		}
		
	}

	/*
	Load Language
	*/

	public function lang($name=""){
		
		$file = FCPATH . "language/".$this->config->item("language")."/{$name}_lang.php";
		
		if(file_exists($file)){

			$this->lang->load($name,$this->config->item("language"),false, true, FCPATH);
			return true;
		}
		return false;
	}
	public function platform(){
		if ($this->agent->is_browser())
		{
		        $agent = $this->agent->browser().' '.$this->agent->version();
		}
		elseif ($this->agent->is_robot())
		{
		        $agent = $this->agent->robot();
		}
		elseif ($this->agent->is_mobile())
		{
		        $agent = $this->agent->mobile();
		}
		else
		{
		        $agent = 'Unidentified User Agent';
		}

		echo $agent;

		echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
	}

	

	public function ipToLang(){
		return false;
		if(defined("ADMIN")) return;
		$ip = $this->input->ip_address();;
		$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
		//echo $details->city; // -> "Mountain View"
		$country = strtolower($details->country);
		$language = "english";
		if($country == "vn"){
			$language = "vn";
		}

		if($country == "cn"){
			$language = "china";
		}
		

		if(!$this->session->userdata("language") && is_dir(FCPATH . "language/".$language)){
			$this->config->set_item("language", $lang);
		}
	}
}

/**
 * 
 */
class Frontend extends BaseController
{
	
	function __construct()
	{
		defined('BASEPATH') OR exit('No direct script access allowed');
		parent::__construct();
		//$this->lang->load("globals",'vietnam',false, true, FCPATH);
		$this->setLayout("home-layout");
	}
}

/**
 * 
 */
class Admin extends BaseController
{
	
	function __construct()
	{
		defined('ADMIN') OR exit('No direct script access allowed');
		parent::__construct();
		//$this->lang->load("globals",'vietnam/admin',false, true, FCPATH);
		$this->checkLogin(); 
		$this->setLayout("home-layout");
	}
}

/**
 * 
 */
class Setup extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
	}
}

/**
 * 
 */
class Access extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
		$this->setLayout("cpanel-layout");
	}
}

/**
 * 
 */
class Api extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
		$this->setLayout("api-layout");
	}
}
