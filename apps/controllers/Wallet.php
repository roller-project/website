<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet extends Frontend {

	function __construct()
	{
		parent::__construct();
		$this->load->model("wallet_model");
	}
	public function index()
	{
		$this->view('dashboard');
	}

	public function manager($symbol="", $address="")
	{
		$data = $this->wallet_model->wallet_list($symbol);
		$web3 = $this->wallet_model->web3($symbol)->eth;
		$history = $this->wallet_model->wallet_history($symbol,$address);
		$this->view('wallet',["data" => $data,"symbol" => $symbol,"address" => $address,"history" => $history, "eth" => $web3,"ether" => "1000000000000000000"]);
	}

	public function create($symbol=""){
		if($this->wallet_model->wallet_limit($symbol,1)){
			$this->flash("error",lang("wallet_limit"));
			redirect(store_url("wallet/manager/{$symbol}"));
		}
		$data = $this->wallet_model->wallet_create($symbol);
		$this->flash("success",lang("wallet_create"));
		redirect(store_url("wallet/manager/{$symbol}/{$data}"));
	}


	public function send($symbol, $adress){
		$number = $this->input->post("number");
		$toaddress = $this->input->post("toaddress");
		
		
		$data = $this->wallet_model->wallet_send($symbol, $adress, $toaddress, $number);
		if(isset($data["status"])){
			if($data["status"] == "error"){
				$this->flash("error",lang("balancer_error"));
			}
			if($data["status"] == "success"){
				$this->flash("success",lang("success_transaction"));
			}
		}
		redirect(store_url("wallet/manager/{$symbol}/{$adress}"));
	}

}
