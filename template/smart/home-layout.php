<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, maximum-scale=1, minimum-scale=1, shrink-to-fit=no">
  <title><?php echo $header["title"];?></title>
  	<meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo template_url("browserconfig.xml");?>">
    <meta name="theme-color" content="#ffffff">
    


    <meta name="twitter:url" content="<?php echo store_url();?>">
    <meta name="twitter:title" content="<?php echo $header["title"];?>">
    <meta name="twitter:description" content="<?php echo $header["description"];?>">
    <meta name="twitter:image" content="<?php echo template_url("image/banner.jpg");?>">
    <meta name="twitter:creator" content="aiodex">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@smartexchange">

    <meta property="og:title" content="<?php echo $header["title"];?>">
    <meta property="og:image" content="<?php echo template_url("image/banner.jpg");?>">
    <meta property="og:description" content="<?php echo $header["description"];?>">
    <meta property="article:author" content="smartexchange">
    <meta property="og:url" content="<?php echo store_url();?>">
    <meta property="og:type" content="article">
    <meta property="article:publisher" content="https://www.facebook.com/smartexchange">
    <meta property="og:site_name" content="<?php echo store_url();?>">

  <link rel="shortcut icon" href="<?php echo store_url("favicon.ico");?>">
  <link rel="icon" href="<?php echo store_url("favicon.ico");?>">

  
  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("js/apps.js");?>"></script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo template_url("apps.css");?>">
  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo template_url("apps.js");?>"></script>
  

<meta name="google-site-verification" content="M329jGz1izszNrlin_lnP_ssu8VrX0rRvwve1L8sVhk" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/v4-shims.css">
<link rel="alternate" href="<?php echo store_url("vietnam.lang");?>" hreflang="vi" />
<link rel="alternate" href="<?php echo store_url("english.lang");?>" hreflang="english" />

</head>
<body>
	
<header id="header">
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="<?php echo store_url();?>"><img class="logo2" src="<?php echo template_url("image/logo2.png");?>" style="height:50px;"><img class="logo" src="<?php echo template_url("image/logo.png");?>" style="height:50px;"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	     
	      
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("#roadmap");?>"><?php echo lang("roadmap");?></a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="http://explorer.roller.today:3000/home" target="_bank">Explorer</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("#exchange");?>"><?php echo lang("exchange");?></a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="https://cms.roller.today" target="_bank"><?php echo lang("wallet");?></a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("#mining");?>"><?php echo lang("mining");?></a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("#team");?>"><?php echo lang("team");?></a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("report-project.html");?>"><?php echo lang("report");?></a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("blogs.html");?>"><?php echo lang("blogs");?></a>
	      </li>



	      <li class="nav-item dropdown">
	        <a class="nav-link btn btn-outline-primary btn-sm dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <?php echo ucfirst(config_item("language"));?>
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo store_url("vietnam.lang");?>">Vietnam</a>
	          <a class="dropdown-item" href="<?php echo store_url("english.lang");?>">English</a>
	          
	        </div>
	      </li>

	      

	    </ul>
	    
	    
	  </div>
	</nav>
	</div>
</header>
	<main ruller="main" class="container-fluid">
		<?php print_r($content);?>
	</main>
	<footer>
		<div class="container">
      <div class="row infolink">
          <div class="col-lg-4 col-sm-12">
            <h4><?php echo lang("about_community");?></h4>
            <a href="/about.html"><?php echo lang("aboutus");?></a>
            <a href="#team"><?php echo lang("team_title");?></a>
            <a href="/report-project.html"><?php echo lang("report_project");?></a>
            <a href="#"><?php echo lang("development_plan");?></a>
          </div>
          <div class="col-lg-4 col-sm-12">
            <h4><?php echo lang("ecosystem");?></h4>
            <a href="#wallet"><?php echo lang("wallet");?></a>
            <a href="#"><?php echo lang("explorer");?></a>
            <a href="https://cms.roller.today">Roller CMS</a>
            <a href="#"><?php echo lang("application");?></a>
          </div>
          <div class="col-lg-4 col-sm-12">
            <h4><?php echo lang("help_customer");?></h4>
            <a href="/blogs.html"><?php echo lang("help");?></a>
            <a href="#"><?php echo lang("faq");?></a>
            <a href="#social">Social</a>
            <a href="#contact"><?php echo lang("contacts");?></a>
          </div>
      </div>  
    </div>
	</footer>


	<script type="text/javascript">
          $(document).ready(function(){

              /**
               * This object controls the nav bar. Implement the add and remove
               * action over the elements of the nav bar that we want to change.
               *
               * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
               */
              var myNavBar = {

                  flagAdd: true,

                  elements: [],

                  init: function (elements) {
                      this.elements = elements;
                  },

                  add : function() {
                      if(this.flagAdd) {
                          for(var i=0; i < this.elements.length; i++) {
                              document.getElementById(this.elements[i]).className += " fixed-theme animated slideInDown";
                          }
                          this.flagAdd = false;
                      }
                  },

                  remove: function() {
                      for(var i=0; i < this.elements.length; i++) {
                          document.getElementById(this.elements[i]).className =
                                  document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme animated slideInDown(?!\S)/g , '' );
                      }
                      this.flagAdd = true;
                  }

              };

              /**
               * Init the object. Pass the object the array of elements
               * that we want to change when the scroll goes down
               */
              myNavBar.init(  [
                  "header"
              ]);

              /**
               * Function that manage the direction
               * of the scroll
               */
              function offSetManager(){

                  var yOffset = 100;
                  var currYOffSet = window.pageYOffset;
                  if($(window).width() > 780){
                    if(yOffset < currYOffSet) {
                        myNavBar.add();
                    }
                    else if(currYOffSet < 50){
                        myNavBar.remove();
                    }
                  }

              }

              /**
               * bind to the document scroll detection
               */
              window.onscroll = function(e) {
                  offSetManager();
              }

              /**
               * We have to do a first detectation of offset because the page
               * could be load with scroll down set.
               */
              offSetManager();
              });
        </script>
</body>
</html>