<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Frontend {

	
	public function index()
	{
		if($this->config->item("maintenance") == "on"){
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
		$exchange = [];
		$exchange[] = [
			"image" => "https://i.imgur.com/jETv0Y1.png",
			"name"	=>	"Aiodex",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];

		$exchange[] = [
			"image" => "https://s3.amazonaws.com/main-newsbtc-images/2017/09/15130433/cobinhood1.png",
			"name"	=>	"Cobinhood",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];
		$exchange[] = [
			"image" => "http://cdn.techpp.com/wp-content/uploads/2018/02/Koinex.jpeg",
			"name"	=>	"Koinex",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];
		$exchange[] = [
			"image" => "https://bitcoinradionetwork.io/wp-content/uploads/2018/04/In-South-Korea-Trading-Opens-On-Crypto-Exchange-Giant-Huobi.png",
			"name"	=>	"Huobi",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];
		$exchange[] = [
			"image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT77lmUGOGUuuzTec1VTRlPhwPwSRxFLBks8mzG1I4THlk3hsu",
			"name"	=>	"Karaken",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];

		$exchange[] = [
			"image" => "https://4.bp.blogspot.com/-aN02e_lmdGY/WLh7U5VTV2I/AAAAAAAADl8/_OUsjv6Vk5E4G7LqRgXo2j7-92gAFbASgCLcB/s1600/Poloniex-logo.png",
			"name"	=>	"Poloniex",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];

		$pool = [];
		$pool[] = [
			"name" => "Offical Pool",
			"url"	=>	""
		];

		$pool[] = [
			"name" => "Offical Pool",
			"url"	=>	""
		];


		$pool[] = [
			"name" => "Offical Pool",
			"url"	=>	""
		];


		$pool[] = [
			"name" => "Offical Pool",
			"url"	=>	""
		];


		$pool[] = [
			"name" => "Offical Pool",
			"url"	=>	""
		];

		$pool[] = [
			"name" => "Offical Pool",
			"url"	=>	""
		];




		$development = [];
		$development[] = [
			"name"  => "Võ Văn Khoa",
			"type"	=> "CEO",
			"description" => "Điều hành phát triển toàn cục hệ thống Roller",
			"image"	=>	"https://pbs.twimg.com/profile_images/1681658825/avatar.png"
		];

		$development[] = [
			"name"  => "Leszek Mitraszewski",
			"type"	=> "Manager",
			"description" => "Tư vấn phát triển vận hành hệ thống Blockchain",
			"image"	=>	"https://www.w3schools.com/w3images/avatar2.png"
		];

		$development[] = [
			"name"  => "Giảng Ngọc Trung",
			"type"	=> "Manager",
			"description" => "Điều hành phát triển Exchange Roller",
			"image"	=>	"https://www.w3schools.com/w3images/avatar3.png"
		];


		$development[] = [
			"name"  => "Đỗ Nguyện",
			"type"	=> "Manager",
			"description" => "Điều hành phát triển Masternode",
			"image"	=>	"https://www.w3schools.com/w3images/avatar4.png"
		];

		$development[] = [
			"name"  => "Nguyễn Nguyên",
			"type"	=> "Manager",
			"description" => "Phát triển Smart Contracts",
			"image"	=>	"https://www.w3schools.com/w3images/avatar5.png"
		];

		$development[] = [
			"name"  => "Lê Phú",
			"type"	=> "Manager",
			"description" => "Điều hành phát triển Application",
			"image"	=>	"https://www.w3schools.com/w3images/avatar1.png"
		];
		/*
		Read Develop Admin Contents
		*/
		$developmentData = $this->content_model->getContent("type=team&language=all");
		foreach ($developmentData as $key => $value) {
			$development[] = [
				"name"  => $value->title,
				"type"	=> "Manager",
				"description" => $value->description,
				"image"	=>	($value->thumbnail ? $value->thumbnail : "https://www.w3schools.com/w3images/avatar1.png")
			];
		}



		$social = [];
		$social[] = [
			"icons" => "fa fa-facebook"
		];
		$social[] = [
			"icons" => "fa fa-github"
		];
		$social[] = [
			"icons" => "fa fa-medium"
		];
		$social[] = [
			"icons" => "fa fa-google-plus"
		];
		$social[] = [
			"icons" => "fa fa-twitter"
		];

		$social[] = [
			"icons" => "fa fa-telegram"
		];

		$data = $this->page_model->getContent("home");
		$content = "";

		if(isset($data->apps_display) && $data->apps_display != "" && file_exists(FCPATH.$data->apps_display)){
			ob_start();
			include_once FCPATH.$data->apps_display;
			$content = ob_get_clean();
			$infoApp = $this->template_model->getApplicationInfo($data->id);
			$content .= '<script type="application/json" id="jsonContent2">'.json_encode($infoApp->json).'</script>';
		}else{
			$this->setLayout("content-layout");
		}

		$blogs = $this->content_model->getContent("type=blog&limit=3");
		$this->view('dashboard',["content" => $content, "data" => $data,"exchange" => $exchange, "pool" => $pool, "development" => $development, "social" => $social, "blogs" => $blogs]);
	}
}
