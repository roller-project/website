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
                <a class="nav-link" href="#">Settings</a>
              </li>

              
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
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
            <a class="nav-link" href="#">Suggestions</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
          </nav>
        </div>

          <main role="main" class="container-fluid">
                  <?php echo $flash;?>
                  <?php echo $content;?>
          </main>
        <footer></footer>

    </body>
</html>