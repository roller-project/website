<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Learn how to include Bootstrap in your project using Webpack 3.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.7.0">
    <title><?php echo $header["title"];?></title>
    <script src="<?php echo resource_url("js/apps.js");?>"></script>
    <link rel="stylesheet" href="<?php echo template_url("css/style.css");?>">
  </head>
    <body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
      <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap">ROL Wallet</a>
    </a>

      <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
          <li class="nav-item">
            <a class="nav-link " href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#" >Exchange</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Token</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Develop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Marketings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul>
      </div>

      <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <li class="nav-item">
            <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="#">Contact</a>
            <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="#">Support</a>
            <?php if($is_login){ ?>
              <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="<?php echo store_url("account/logout");?>">Logout</a>
            <?php } ?>
          
        </li>

       
      </ul>

     
    </header>

    <div class="container-fluid">
        <div class="row flex-xl-nowrap">
            <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
              <form class="bd-search d-flex align-items-center">
                  <input type="search" class="form-control" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off">
                  <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
                </button>
                </form>

                <nav class="collapse bd-links" id="bd-docs-nav">
                    <div class="bd-toc-item active">
                      <h4> Wallet Service</h4>

                        <ul class="nav bd-sidenav">
                            <?php foreach ($menu as $key => $value) { ?>
                               <li class="card card-body">
                                  <a href="<?php echo store_url("wallet/manager/".strtolower($value->symbol));?>">
                                    <img src="<?php echo resource_url("image/".$value->icons);?>" style="width:50px;">
                                    <?php echo $value->name;?>
                                  </a>
                              </li>
                            <?php } ?>
                           
                           
                        </ul>
                    </div>
                </nav>

            </div>
        
            <main class="col-12 col-md-9 col-xl-10 py-md-3 pl-md-5 bd-content" role="main">
                <?php echo $flash;?>
                <?php echo $content;?>
            </main>
        </div>
    </div>

    </body>
</html>