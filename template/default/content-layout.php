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
                  <a class="nav-link" href="<?php echo store_url($value["link"]);?>" title="<?php echo $value["name"];?>"><i class="<?php echo $value["icons"];?>"></i> <?php echo $value["name"];?></a>
                </li>
              <?php } ?>
              

              <li class="nav-item">
                <a class="nav-link btn btn-outline-light btn-capsule px-3" href="<?php echo store_url("account");?>"><i class="ti-user"></i> <?php echo lang("account");?></a>
              </li>
              
            </ul>
            
          </div>
        </nav>
      </header>
    

          <main id="content" role="main">



            <div class="position-relative text-center u-space-3-top u-gradient-overlay-half-info-v1 u-bg-img-hero" style="background-image: url(../../assets/img/1920x800/img10.jpg);">
                <div class="row justify-content-md-center">
                  <div class="col-md-8 col-lg-7 col-xl-5">
                    <!-- Info -->
                    <div class="mb-4">
                      <h1 class="display-4 text-white font-weight-normal mb-3"><?php echo $header["title"];?></h1>

                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a class="u-text-light" href="#">
                            <span class="fa fa-map-marker-alt"></span>
                            California
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a class="u-text-light" href="#">
                            <span class="fa fa-globe"></span>
                            mooreismine.com
                          </a>
                        </li>
                      </ul>

                      <p class="text-white">I am an ambitious adventurer, but apart from that, pretty simple person.</p>
                    </div>
                    <!-- End Info -->

                    <!-- Followers -->
                    
                    <!-- End Followers -->

                    <!-- Avatar -->
                    <br><br><br>
                    <!-- End Avatar -->
                  </div>

                  <!-- SVG Background -->
                  <figure class="position-absolute-bottom-0 z-index-minus-1">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="200px" viewBox="20 -20 300 100" style="margin-bottom: -8px;" xml:space="preserve">
                      <path class="u-fill-white" opacity="0.4" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"></path>
                      <path class="u-fill-white" opacity="0.4" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"></path>
                      <path class="u-fill-white" opacity="0" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z"></path>
                      <path class="u-fill-white" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"></path>
                    </svg>
                  </figure>
                  <!-- End SVG Background Section -->
                </div>
              </div>

                  <div class="container">
                    <?php echo $flash;?>
                    <?php echo $content;?>
                  </div>
          </main>



        <div class="position-relative" style="border-top:1px solid #ddd;">
  <figure class="position-absolute-bottom-0">
      <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewBox="20 -20 300 100">
        <path class="u-fill-white" opacity="0.4" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"></path>
        <path class="u-fill-white" opacity="0.4" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"></path>
        <path class="u-fill-white" opacity="0" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z"></path>
        <path class="u-fill-white" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"></path>
      </svg>
    </figure>

<div class="u-gradient-half-primary-v3">
      <div class="container u-space-1-top">
        <div class="row align-items-start">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <!-- Title -->
            <div class="pr-md-4 mb-4">
              <span class="u-label u-label--sm u-label--success mb-2">Support</span>
              <h2 class="text-primary">Hỗ trợ <span class="font-weight-bold">người dùng</span></h2>
              <p>Các kênh hổ trợ người sử dụng Roller Platform.</p>
            </div>
            <!-- End Title -->

            <a class="btn btn-primary u-btn-primary u-btn-wide u-btn-pill transition-3d-hover mr-1 mb-2" href="#" target="_blank">Facebook</a>
            <a class="btn u-btn-primary--air u-btn-wide u-btn-pill transition-3d-hover ml-1 mb-2" href="#">Support Online</a>


           

          </div>

          <div class="col-lg-7 mt-auto">
            <!-- SVG Icon -->
            <img src="<?php echo store_url("uploads/illustration.svg");?>" alt="SVG Illustration">
            <!-- End SVG Icon -->
          </div>
        </div>
      </div>
    </div>

</div>


        <footer class="bg-gray">
          <div class="container">
            <div class="row wow fadeInUp">
              <div class="col-12">
                <div class="social">
                  <span data-i18n="footer.heading">Follow us</span>
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

              <div class="col-12">
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