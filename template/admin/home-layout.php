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
    <link rel="stylesheet" href="<?php echo resource_url("bootstrap/css/bootstrap-extension.css");?>">
    <script src="<?php echo resource_url("bootstrap/js/bootstrap-extension.js");?>"></script>
    <link rel="stylesheet" href="<?php echo template_url("css/style.css");?>">
    <script src="<?php echo template_url("js/main.js");?>"></script>

    
    <link rel="stylesheet" href="<?php echo resource_url("icons/themify/themify-icons.css");?>">
  </head>
    <body>
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-blue">
          <a class="navbar-brand" href="#">Offcanvas navbar</a>
          <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo admin_url("page/manager");?>">Pages</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo admin_url("content/manager");?>">Contents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo admin_url("template/manager");?>">Templates</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Application</a>
              </li>


              <li class="nav-item">
                <a class="nav-link" href="<?php echo admin_url("settings/manager");?>">Settings</a>
              </li>

              
            </ul>
            <ul class="navbar-nav form-inline my-2 my-lg-0">
              <li><a class="nav-link" href="<?php echo admin_url();?>?language=english">English</a></li>
              <li><a class="nav-link" href="<?php echo admin_url();?>?language=vietnam">Vietnam</a></li>
              <li><a class="nav-link" href="<?php echo admin_url();?>?language=china">China</a></li>
              <li><a class="nav-link" href="<?php echo admin_url();?>?language=russia">Russia</a></li>
              <li><a class="nav-link" href="<?php echo admin_url();?>?language=korea">Korea</a></li>
            </ul>
          </div>
        </nav>

        <div class="nav-scroller bg-white box-shadow">
          <nav class="nav nav-underline">
            <a class="nav-link active" href="#">Dashboard</a>
            <a class="nav-link" href="#">
              Friends
              <span class="badge badge-pill bg-light align-text-bottom">27</span>
            </a>
            <a class="nav-link" href="#">Explore</a>
            <a class="nav-link" href="#">Language</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            
            
           
           

          </nav>
        </div>

          <main id="content" role="main" class="container-fluid">
                  <?php echo $flash;?>
                  <?php echo $content;?>
          </main>
          <br>
        <footer></footer>

    </body>
</html>