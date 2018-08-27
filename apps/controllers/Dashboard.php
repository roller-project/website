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

	public function setlanguage($language){
		$this->session->set_userdata("language",$language);
		redirect(store_url());
	}
	public function home()
	{
		$exchange = [];
		$exchange[] = [
			"image" => template_url("image/exchange/s1.png"),
			"name"	=>	"Aiodex",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];

		$exchange[] = [
			"image" => template_url("image/exchange/cobinhood1.png"),
			"name"	=>	"Cobinhood",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];
		$exchange[] = [
			"image" => template_url("image/exchange/Koinex.jpeg"),
			"name"	=>	"Koinex",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];
		$exchange[] = [
			"image" => template_url("image/exchange/In-South-Korea-Trading-Opens-On-Crypto-Exchange-Giant-Huobi.png"),
			"name"	=>	"Huobi",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];
		$exchange[] = [
			"image" => template_url("image/exchange/images.png"),
			"name"	=>	"Karaken",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];

		$exchange[] = [
			"image" => template_url("image/exchange/Poloniex-logo.png"),
			"name"	=>	"Poloniex",
			"url"	=>	"https://aiodex.com/vote/coin/5b6458f3a315090673cbb57f#"
		];

		$pool = [];
		$pool[] = [
			"name" => "Offical Pool",
			"url"	=>	"http://pool.roller.today/"
		];

		$pool[] = [
			"name" => "Cryptopools",
			"url"	=>	"https://roller.cryptopools.info/"
		];


		$pool[] = [
			"name" => "Comining.io",
			"url"	=>	"https://comining.io/"
		];


		$pool[] = [
			"name" => "Minerpool.cf",
			"url"	=>	"http://rol.minerpool.cf/"
		];


		$pool[] = [
			"name" => "Offical Pool",
			"url"	=>	"http://pool.roller.today/"
		];

		$pool[] = [
			"name" => "Offical Pool",
			"url"	=>	"http://pool.roller.today/"
		];



		$langdev = lang("developteam");
		$development = [];
		$development[] = [
			"name"  => "Võ Văn Khoa",
			"type"	=> "CEO",
			"description" => $langdev[0],
			"image"	=>	template_url("image/develop/avatar.png"),
			"social" => "fab fa-facebook|https://www.facebook.com/bitcoindplust;fab fa-telegram|https://t.me/vnminer;fab fa-github|https://github.com/roller-project;fab fa-medium|https://github.com/roller-project"
		];

		$development[] = [
			"name"  => "Leslaw Mitraszewski",
			"type"	=> "Manager",
			"description" => $langdev[1],
			"image"	=>	template_url("image/develop/lee.jpg"),
			"social" => "fab fa-facebook|https://www.facebook.com/lee.opencart"
		];

		$development[] = [
			"name"  => "Giảng Ngọc Trung",
			"type"	=> "Manager",
			"description" => $langdev[2],
			"image"	=>	template_url("image/develop/gianngoctrung.png"),
			"social" => "fab fa-facebook|https://www.facebook.com/GianNgocTrung"
		];


		$development[] = [
			"name"  => "Đỗ Nguyện",
			"type"	=> "Manager",
			"description" => $langdev[3],
			"image"	=>	template_url("image/develop/dauhu.png"),
			"social" => "fab fa-facebook|https://www.facebook.com/bitcoindplust"
		];

		$development[] = [
			"name"  => "Nguyễn Nguyên",
			"type"	=> "Manager",
			"description" => $langdev[4],
			"image"	=>	template_url("image/develop/avatar5.png"),
			"social" => "fab fa-facebook|https://www.facebook.com/profile.php?id=100009722088431"
		];

		$development[] = [
			"name"  => "Lê Phú",
			"type"	=> "Manager",
			"description" => $langdev[5],
			"image"	=>	template_url("image/develop/lephu.jpg"),
			"social" => "fab fa-facebook|https://www.facebook.com/trieuphule;fab fa-github|https://github.com/lephuit;fab fa-skype|skype://call?lephuit"
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
				"image"	=>	($value->thumbnail ? $value->thumbnail : template_url("image/develop/avatar1.png")),
				"social" => ""
			];
		}



		$social = [];
		$social[] = [
			"icons" => "fab fa-facebook",
			"url" => "https://www.facebook.com/groups/1071050689694143/"
		];
		$social[] = [
			"icons" => "fab fa-github",
			"url"	=> "https://github.com/roller-project"
		];
		$social[] = [
			"icons" => "fab fa-medium",
			"url" => "#"
		];
		$social[] = [
			"icons" => "fab fa-discord",
			"url"	=>	"https://discord.gg/Y928qyU",
		];
		$social[] = [
			"icons" => "fab fa-twitter",
			"url"	=>	"https://twitter.com/RollerPlatform",
		];

		$social[] = [
			"icons" => "fab fa-telegram",
			"url"	=>	"https://t.me/vnminer",
		];

		$data = $this->page_model->getContent("home");
		$content = "";
		/*
		if(isset($data->apps_display) && $data->apps_display != "" && file_exists(FCPATH.$data->apps_display)){
			ob_start();
			include_once FCPATH.$data->apps_display;
			$content = ob_get_clean();
			$infoApp = $this->template_model->getApplicationInfo($data->id);
			$content .= '<script type="application/json" id="jsonContent2">'.json_encode($infoApp->json).'</script>';
		}else{
			$this->setLayout("content-layout");
		}
		*/

		$blogs = $this->content_model->getContent("type=blog&limit=3");

		$roadmap_timeline = lang("roadmap_timeline");
		$roadmap = [];
		$roadmap[] = [
			"timeline" => "Q4 2018",
			"class" => "success",
			"description" => $roadmap_timeline[0]
		];

		$roadmap[] = [
			"timeline" => "Q1 2019",
			"class" => "text-warning",
			"description" => $roadmap_timeline[1]
		];

		$roadmap[] = [
			"timeline" => "Q2 2019",
			"description" => $roadmap_timeline[2]
		];

		$roadmap[] = [
			"timeline" => "Q3 2019",
			"description" => $roadmap_timeline[3]
		];

		$roadmap[] = [
			"timeline" => "Q4 2019",
			"description" => $roadmap_timeline[4]
		];

		$roadmap[] = [
			"timeline" => "Q1 2020",
			"description" => $roadmap_timeline[5]
		];

		$this->view('dashboard',["content" => $content, "data" => $data,"exchange" => $exchange, "pool" => $pool, "development" => $development, "social" => $social, "blogs" => $blogs, "roadmap" => $roadmap]);
	}
}
