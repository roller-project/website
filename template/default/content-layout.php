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
        <nav class="navbar navbar-expand-md navbar-none bg-none container">
          <a class="navbar-brand" href="<?php echo store_url("");?>"><img src="<?php echo template_url("image/logo.png");?>" style="height: 50px;"></a>
          <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
          </button>

         

          <div class="navbar-collapse offcanvas-collapse py-0" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo store_url("");?>"><i class="ti-home"></i> <?php echo lang("home");?> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://explorer.roller.today:3000/home" target="_blank"><i class="ti-exploder"></i> Exploder</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://wallet.roller.today" target="_blank"><i class="ti-wallet"></i> Wallet</a>
              </li>

              <?php foreach ($menu as $key => $value) { ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo store_url($key);?>" title="<?php echo $value;?>"><?php echo $value;?></a>
                </li>
              <?php } ?>
              

              <li class="nav-item">
                <a class="nav-link btn btn-outline-light btn-capsule px-3" href="<?php echo store_url("account");?>"><i class="ti-user"></i> <?php echo lang("account");?></a>
              </li>
              
            </ul>
            
          </div>
        </nav>
      </header>
    

          <main role="main">
            <div style="background-color: red; height: 120px;"></div>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-9">
                          <?php echo $flash;?>
                          <?php echo $content;?>
                      </div>
                      <div class="col-lg-3">
                        <h4>Plugins Set</h4>
                      </div>
                    </div>
                  </div>
          </main>

        <footer class="bg-gray">
          <div class="container">
            <div class="row wow fadeInUp">
              <div class="col-12">
                <p class="social">
                  <span data-i18n="footer.heading">Follow us</span>
                  <a href="#" target="_blank">
                    <img src="<?php echo template_url("image/tw.png");?>" width="30" height="30">
                  </a>
                  <a href="#" target="_blank">
                    <img src="<?php echo template_url("image/me.png");?>" width="30" height="30">
                  </a>
                  <a class="wechat" target="_blank">
                    <img src="<?php echo template_url("image/weixin.png");?>" width="30" height="30">
                    
                  </a>
                  <a href="#" target="_blank">
                    <img src="<?php echo template_url("image/te.png");?>" width="30" height="30">
                  </a>
                  <a href="#" target="_blank">
                    <img src="<?php echo template_url("image/git.png");?>" width="30" height="30">
                  </a>
                  <a href="#" target="_blank">
                    <img src="<?php echo template_url("image/weibo.png");?>" width="30" height="30">
                  </a>
                  <a href="#" target="_blank">
                    <img src="<?php echo template_url("image/youtube.png");?>" width="30" height="30">
                  </a>
                  <a href="#" target="_blank">
                    <img src="<?php echo template_url("image/link.png");?>" width="30" height="30">
                  </a>
                  <a href="#" target="_blank">
                    <img src="<?php echo template_url("image/fb.png");?>" width="30" height="30">
                  </a>
                  <a href="#" target="_blank">
                    <img src="<?php echo template_url("image/reddit.png");?>" width="30" height="30">
                  </a>
                </p>
              </div>

              <div class="col-12">
                <!--copyright-->
                <p class="copyright">Language : English | Vietnam | China | Russia | Korea</p>
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

                  if(yOffset < currYOffSet) {
                      myNavBar.add();
                  }
                  else if(currYOffSet == yOffset){
                      myNavBar.remove();
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