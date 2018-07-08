<?php
use phpseclib\Math\BigInteger;
class Wallet_model extends CI_Model{
	public function wallet_list($symbol){
		$symbol = strtolower($symbol);
		$account_id = $this->account_model->validate_login();
		if(!$account_id) return [];
		$this->db->where("account_id", $account_id);
		$this->db->where("symbol", $symbol);
		$this->db->order_by("created_at", "DESC");
		return $this->db->get("wallet_account")->result();
	}


	public function wallet_limit($symbol, $limit=1){
		$account_id = $this->account_model->validate_login();
		if(!$account_id) return [];
		$this->db->where("account_id", $account_id);
		$this->db->where("symbol", $symbol);
		$count = $this->db->from("wallet_account")->count_all_results();
		if($count >= $limit){
			return true;
		}
		return false;
	}
	public function wallet_create($symbol){
		$symbol = strtolower($symbol);
		$account_id = $this->account_model->validate_login();
		$geth = $this->wallet_account($symbol);
		if(!$account_id) return [];

		
		if(@$geth["address"] && @$geth["password"]){

			$arv = [
				"account_id" => $account_id,
				"symbol"	=> $symbol,
				"address" => $geth["address"],
				"password" => $geth["password"]
			];

			$this->db->insert("wallet_account",$arv);
			return $geth["address"];
		}
	}

	public function web3($symbol){

		$service = $this->db->get_where("wallet_services",["symbol" => $symbol])->row();
		if(!$service) return false;
		$server = $service->server;
		if($server){
			$web3 = new Web3\Web3(new Web3\Providers\HttpProvider(new Web3\RequestManagers\HttpRequestManager($server, 5)));
			return $web3;
		}
	}

	private function wallet_account($symbol){
		$password = random_string('alnum', 16);

		$newAccount = "";
		$web3 = $this->web3($symbol);
		if(!$web3) return false;
		$web3->personal->newAccount($password, function ($err, $account) use (&$newAccount) {
		    if ($err !== null) {
		        echo 'Error: ' . $err->getMessage();
		        return;
		    }
		    $newAccount = $account;
		   
		});
		return ["address" => $newAccount, "password" => $password];


	}
	public function wallet_send($symbol, $address, $toaddress, $number){
		$account_id = $this->account_model->validate_login();
		if(!$account_id) return [];
		
		$data = $this->db->get_where("wallet_account",["symbol" => $symbol,"address" => $address, "account_id" => $account_id])->row();
		if($data){
			$web3 = $this->web3($symbol);
			if(!$web3) return false;
			$unlockedcheck = false;
			$web3->personal->unlockAccount($data->address, $data->password, function($err, $unlocked) use(&$unlockedcheck){
				$unlockedcheck = $unlocked;
			});
			if($unlockedcheck){
				

				/*
				Get Balancer Accouunt Send
				*/
				$fromAccountBalancer = 0;
				$web3->eth->getBalance($data->address, function ($err, $balance) use(&$fromAccountBalancer) {
			        if ($err !== null) {
			            echo 'Error: ' . $err->getMessage();
			            return;
			        }
			        $fromAccountBalancer = $balance->toString();
			    });
			    
			    $transactionID = null;
			    $num = $web3->utils->toWei($number,'ether');
			    $web3->eth->sendTransaction([
				        'from' => $data->address,
				        'to' => $toaddress,
				        'value' => $web3->utils->toHex($num,true)
				    ], function ($err, $transaction) use(&$transactionID){
				    	$transactionID = $transaction;
				    });
			    if($transactionID){
			   		$this->wallet_transaction($transactionID, $symbol, $address, $toaddress, $number);
			   		return [ "status" => "success", "code" => $number];
			    }else{
			    	return [ "status" => "error", "code" => "balancer"];
			    }
			}
		}
		return false;
	}

	private function wallet_transaction($transactionID, $symbol, $address, $toaddress, $number){
		$account_id = $this->account_model->validate_login();
		if(!$account_id) return [];
		$arv = [
			"account_id" => $account_id,
			"symbol" => $symbol,
			"formAddress" => $address,
			"toAddress" => $toaddress,
			"quantity" => $number,
			"tx" => $transactionID
		];
		$this->db->insert("wallet_transaction",$arv);
	}


	public function wallet_history($symbol, $address=""){
		$account_id = $this->account_model->validate_login();
		if(!$account_id) return [];
		if($address){
			$this->db->where("formAddress", $address);
		}
		$this->db->where("account_id", $account_id);

		if($symbol){
			$this->db->where("symbol", $symbol);
		}
		$this->db->order_by("id","DESC");
		return $this->db->get("wallet_transaction",20)->result();
	}

}