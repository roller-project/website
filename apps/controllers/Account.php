<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Access {

	function __construct()
	{
		parent::__construct();
		$this->setLayout("access-layout");
	}
	public function index()
	{
		$this->view('account/dashboard');
	}

	public function register()
	{
		$this->view('account/register');
	}

	public function validate_register(){

		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$ref = $this->input->post("ref");
		
		//$this->validate_security(true);

		$register = $this->account_model->register(["email" => $email, "password" => $password]);
		if($register){
			$this->flash("success", lang("success_register"));
			redirect($ref ? $ref : store_url());
		}else{
			$this->flash("error", lang("account_ready"));
		}
		
		redirect(store_url("account/register"));
		
		
		
	}

	public function login()
	{
		
		$this->view('account/login');
	}

	public function validate_login(){

		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$ref = $this->input->post("ref");
		
		//$this->validate_security(true);

		$login = $this->account_model->login(["email" => $email, "password" => $password]);
		if(isset($login["id"])){
			$this->session->set_userdata($login);
			$this->flash("success", lang("success_login"));
			redirect($ref ? $ref : store_url());
		}
		
		redirect(store_url("account/login?ref=".$ref));
		
		
		
	}

	public function logout()
	{
		$user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    	$this->session->sess_destroy();

		redirect(store_url("account/login"));
	}

}
