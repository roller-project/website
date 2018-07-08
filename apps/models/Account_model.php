<?php
class Account_model extends CI_Model{

	public function login($arv=[]){
		$email = strtolower($arv["email"]);
		$password = strtolower($arv["password"]);

		$this->db->where("email",$email);
		$this->db->where("password",md5($password));
		$this->db->where("status",1);
		$row = $this->db->get("account",1)->row();
		if($row){
			$this->login_history($row->id);
			return ["is_login" => true,"id" => $row->id, "token" => $row->token];
		}
		return false;
	}

	private function login_history($id){
		$ip = $this->input->ip_address();
		$brown = $this->agent->browser().' '.$this->agent->version().' '.$this->agent->platform();

		$arv = ["account_id" => $id, "lastlogin" => date("Y-m-d h:i:s"), "lastlogin_ip" => $ip, "lastlogin_brown" => $brown];
		$this->db->insert("account_history", $arv);
	}


	public function register($arv=[]){
		$email = strtolower($arv["email"]);
		$password = strtolower($arv["password"]);
		$this->db->where("email",$email);
		$row = $this->db->get("account",1)->row();
		if($row) return false;


		$arv = [
			"email" => $email,
			"password" => md5($password),
			"status"	=>	"1",
			"token"		=>	random_string('alnum', 16)
		];
		$this->db->insert("account", $arv);
		return true;

	}

	public function getInfo($id=""){

	}

	public function validate_login(){
		$id = $this->session->userdata("id");
		$row = $this->db->get_where("account",["id" => $id])->row();
		if($row){
			return $row->id;
		}
		return false;
	}

	public function updateProfile(){

	}

	public function baned(){

	}

	public function unban(){

	}

	public function setGroups(){

	}

}