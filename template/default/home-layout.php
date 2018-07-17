<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Learn how to include Bootstrap in your project using Webpack 3.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.7.0">
    <link rel="icon" href="<?php echo resource_url("favicon.ico");?>">
    <title><?php echo $header["title"];?></title>
    <script src="<?php echo resource_url("js/apps.js");?>"></script>
    <link rel="stylesheet" href="<?php echo resource_url("icons/themify/themify-icons.css");?>">
    <link rel="stylesheet" href="<?php echo resource_url("bootstrap/css/bootstrap-extension.css");?>">
    <script src="<?php echo resource_url("bootstrap/js/bootstrap-extension.js");?>"></script>

    <link rel="stylesheet" href="<?php echo template_url("css/ui.css");?>">
    <link rel="stylesheet" href="<?php echo template_url("css/style.css");?>">
    <script src="<?php echo template_url("js/main.js");?>"></script>


    

  </head>
    <body>
      
      <header  id="header">
        <nav class="navbar navbar-expand-md navbar-light bg-none container">
          <a class="navbar-brand" href="<?php echo store_url("");?>"><img src="<?php echo template_url("image/logo.png");?>" style="height: 50px;"></a>
          <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
          </button>

         

          <div class="collapse navbar-collapse  offcanvas-collapse py-0" id="navbarsExampleDefault">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo store_url("");?>"><i class="ti-home"></i> <?php echo lang("home");?> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://explorer.roller.today:3000/home" target="_blank"><i class="ti-export"></i> Exploder</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://wallet.roller.today" target="_blank"><i class="ti-wallet"></i> Wallet</a>
              </li>

              <?php foreach ($menu as $key => $value) { ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo store_url($value["link"]);?>" title="<?php echo $value["name"];?>"><i class="<?php echo $value["icons"];?>"></i> <?php echo $value["name"];?></a>
                </li>
              <?php } ?>
              

              
              
            </ul>
            <ul class="navbar-nav ml-lg-auto">
              
              <li class="nav-item">
                <a class="nav-link btn btn-outline-light btn-capsule px-3" href="<?php echo store_url("account");?>"><i class="ti-user"></i> <?php echo lang("account");?></a>
              </li>
            </ul>
            
          </div>
        </nav>
      </header>
    

          <main id="content" role="main">
                  <?php echo $flash;?>
                  <?php echo $content;?>
          </main>

        <footer class="bg-gray">
          <div class="container">
            

            <div class="row">
              <div class="col-lg-7 col-md-12 md-auto">
                <ul class="row menuFooter">
                  <?php foreach ($footer as $key => $value) { ?>
                    <li class="col-lg-6">
                      <a  href="<?php echo store_url($value["link"]);?>" title="<?php echo $value["name"];?>"><i class="<?php echo ($value["icons"] ? $value["icons"] : "ti-plus");?>"></i> <?php echo $value["name"];?></a>
                    </li>
                  <?php } ?>
                 
                </ul>
                
                
                
              </div>
              <div class="col-lg-5 col-md-12 md-auto text-right">
                <button type="button" class="btn btn-xs btn-primary u-btn-primary u-btn-wide u-btn-pill text-left mb-2 mb-sm-0 mr-1">
                  <span class="media align-items-center">
                    <span class="d-flex mr-3">
                      <span class="fab fa-apple font-size-26"></span>
                    </span>
                    <span class="media-body">
                      <span class="d-block">Download on the</span>
                      <strong class="font-size-14">App Store</strong>
                    </span>
                  </span>
                </button>

                <button type="button" class="btn btn-xs btn-primary u-btn-primary u-btn-wide u-btn-pill text-left mb-2 mb-sm-0 ml-1">
                  <span class="media align-items-center">
                    <span class="d-flex mr-3">
                      <span class="fab fa-google-play font-size-26"></span>
                    </span>
                    <span class="media-body">
                      <span class="d-block">Get it on</span>
                      <strong class="font-size-14">Google Play</strong>
                    </span>
                  </span>
                </button>
                <br><br>
                <div class="social">
                <ul>
                  <?php $social_db = json_decode($this->config->item("social"));?>
                  <?php foreach ($social_db as $keySdb => $valueSdb) { ?>
                      <li class="btn-outline-primary">
                        <a href="<?php echo $valueSdb;?>" target="_blank">
                          <i class="ti-<?php echo $keySdb;?>"></i>
                        </a>
                      </li>
                  <?php } ?>
                  </ul>
                  </div>
              </div>
              <div class="col-lg-12">
                <br>
                 <p class="text-left">Các quá trình phát triển của chúng tôi còn phụ thuộc vào sự đóng góp chi phí và công nghệ của cộng đồng sử dụng. Các đóng góp vui lòng gởi về <a href="https://www.blockchain.com/btc/address/18UDydoLS6eckX2aspZLWUWngKkZahWPkK" target="_bank">18UDydoLS6eckX2aspZLWUWngKkZahWPkK</a></p>
                <!--copyright-->
                <p class="copyright">Language : <a href="?language=english">English</a> | <a href="?language=vietnam">Vietnam</a> | <a href="?language=china">China</a> | <a href="?language=russia">Russia</a> | <a href="?language=korea">Korea</a></p>
                <!--/copyright-->
              </div>

              <div class="col-12">
                <!--copyright-->
                <p class="copyright">© Copyright Roller Project. All Rights Reserved</p>
                <!--/copyright-->
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