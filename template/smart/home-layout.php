<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, maximum-scale=1, minimum-scale=1, shrink-to-fit=no">
  <title>Roller Platform</title>
  	<meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo template_url("browserconfig.xml");?>">
    <meta name="theme-color" content="#ffffff">
    


    <meta name="twitter:url" content="<?php echo store_url();?>">
    <meta name="twitter:title" content="Blockchain Assets Trading Platform">
    <meta name="twitter:description" content="The first 300K registered members will be free of trading fees in the first year. With each member invited, you will receive an additional one month free trading fee.">
    <meta name="twitter:image" content="http://coverlayout.com/facebook/covers/cute-puppy-dog/cute-puppy-dog_tn.jpg">
    <meta name="twitter:creator" content="aiodex">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@smartexchange">

    <meta property="og:title" content="Blockchain Assets Trading Platform">
    <meta property="og:image" content="http://coverlayout.com/facebook/covers/cute-puppy-dog/cute-puppy-dog_tn.jpg">
    <meta property="og:description" content="The first 300K registered members will be free of trading fees in the first year. With each member invited, you will receive an additional one month free trading fee.">
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
  
  <script src='//cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.4/socket.io.min.js'></script>
 

<meta name="google-site-verification" content="M329jGz1izszNrlin_lnP_ssu8VrX0rRvwve1L8sVhk" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/v4-shims.css">
<link rel="alternate" href="<?php echo store_url("vi");?>" hreflang="vi" />

</head>
<body>
	
<header id="header">
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="<?php echo store_url();?>"><img src="<?php echo template_url("image/logo.png");?>" style="height:50px;"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo store_url("");?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("#roadmap");?>">Roadmap</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="http://explorer.roller.today:3000/home" target="_bank">Explorer</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("#exchange");?>">Exchanges</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="https://cms.roller.today" target="_bank">Wallets</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("#mining");?>">Mining</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("#team");?>">Team</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("report-project.html");?>">Report Project</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("blogs.html");?>">Blog</a>
	      </li>



	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Language
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo store_url("vote");?>">Vietnam</a>
	          <a class="dropdown-item" href="<?php echo store_url("coinbase");?>">English</a>
	          
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
		<div class="container-fluid"></div>
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

                  var yOffset = 0;
                  var currYOffSet = window.pageYOffset;
                  if($(window).width() > 780){
                    if(yOffset < currYOffSet) {
                        myNavBar.add();
                    }
                    else if(currYOffSet == yOffset){
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