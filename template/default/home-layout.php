<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Learn how to include Bootstrap in your project using Webpack 3.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.7.0">
    <link rel="icon" href="<?php echo resource_url("favicon.ico");?>">
    <title><?php echo $header["title"];?></title>
    <script src="<?php echo resource_url("js/apps.js");?>"></script>
    <link rel="stylesheet" href="<?php echo template_url("css/style.css");?>">
    <script src="<?php echo template_url("js/main.js");?>"></script>
  </head>
    <body>
        <nav class="navbar navbar-expand-md fixed-top navbar-none bg-none">
          <a class="navbar-brand" href="<?php echo store_url("");?>"><img src="<?php echo template_url("image/logo.png");?>" style="height: 50px;"></a>
          <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
          </button>

         

          <div class="navbar-collapse offcanvas-collapse py-0" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Exploder</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Wallet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
              </li>
              
            </ul>
            
          </div>
        </nav>

    

          <main role="main">
                  <?php echo $flash;?>
                  <?php echo $content;?>
          </main>

        <footer>
          <div class="container">
            <div class="row wow fadeInUp">
              <div class="col-12">
                <p class="social">
                  <span data-i18n="footer.heading">Follow us</span>
                  <a href="https://twitter.com/Contentbox_one" target="_blank">
                    <img src="img/social/tw.png" width="30" height="30">
                  </a>
                  <a href="https://medium.com/contentbox" target="_blank">
                    <img src="img/social/me.png" width="30" height="30">
                  </a>
                              <a class="wechat" target="_blank">
                    <img src="img/social/weixin.png" width="30" height="30">
                    <span>
                      <img src="img/qrcode.jpg">
                    </span>
                  </a>
                  <a href="https://t.me/BoxCommunity" target="_blank">
                    <img src="img/social/te.png" width="30" height="30">
                  </a>
                  <a href="https://github.com/BOXFoundation" target="_blank">
                    <img src="img/social/git.png" width="30" height="30">
                  </a>
                  <a href="https://weibo.com/contentbox" target="_blank">
                    <img src="img/social/weibo.png" width="30" height="30">
                  </a>
                  <a href="https://www.youtube.com/channel/UCzxIFF-xaejf5PlV78trqUw" target="_blank">
                    <img src="img/social/youtube.png" width="30" height="30">
                  </a>
                  <a href="https://www.linkedin.com/company/contentbox-foundation" target="_blank">
                    <img src="img/social/link.png" width="30" height="30">
                  </a>
                  <a href="https://www.facebook.com/contentboxone/" target="_blank">
                    <img src="img/social/fb.png" width="30" height="30">
                  </a>
                  <a href="https://www.reddit.com/r/ContentBoxOfficial/" target="_blank">
                    <img src="img/social/reddit.png" width="30" height="30">
                  </a>
                </p>
              </div>
              <div class="col-12">
                <!--copyright-->
                <p class="copyright">© Copyright ContentBox. All Rights Reserved</p>
                <!--/copyright-->
              </div>
            </div>
          </div>
        </footer>
    </body>
</html>