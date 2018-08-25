<div class="slider">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="http://cssslider.com/sliders/demo-10/data1/images/3.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block carousel-text carousel-text-left">
          <h3>Roller Platform</h3>
          <p>Roller Platform là một hệ sinh thái tiền mã hóa mã nguồn mở phi tập trung, dựa trên nền tảng của Ethereum với ký hiệu của riêng là "ROL". <br><br>Mục tiêu chính của Roller là nghiên cứu, phát triển một cơ chế tự duy trì, tự quản lí, tự tài trợ hệ sinh thái blockchain và môi trường phát triển ứng dụng của blockchain. </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="http://cssslider.com/sliders/demo-10/data1/images/2.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption d-none d-md-block carousel-text carousel-text-left">
            <h3>Ứng dụng</h3>
            <p>Với các ứng dụng thiết thực từ Smart Contracts như. Tech Document, Share Contracts, ANN, Miner Controller, Security Web 4.0, IoT Services ... Roller sẽ mang đến cho người dùng cuối tiếp cận ứng dụng công nghệ trong thời kỳ công nghiệp 4.0</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="http://cssslider.com/sliders/demo-10/data1/images/1.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block carousel-text carousel-text-left">
          <h3>Development</h3>
          <p>Roller Platform được phát triển bởi các lập trình viên Việt Nam. Với các hệ thống liền mạch như Exchange, CMS, Masternode, etc....<br><br>
            Với hệ thống CMS có nhiều Services được cung cấp miễn phí cho người dùng trên các ứng dụng của Roller. Chúng mang đến một cách nhìn tổng quan và thiết thực cuộc sống
          </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section id="roadmap">
  <h2 class="text-center text-green title"><?php echo lang("roadmap_title");?></h2>
  <div class="container">
      <div class="row">
          <?php 
          foreach ($roadmap as $key => $value) { 
            if($key%2 == 0){
            ?>
            <div class="col-sm-6 <?php echo ($key + 2 < count($roadmap) ? "border-bottom" : "");?> <?php echo ($key%2 == 0 ? "border-right alt" : "");?> <?php echo @$value["class"];?> d-flex" style="padding-top: 15px;">
            
            <p><?php echo $value["description"];?></p>
            <h4><?php echo $value["timeline"];?></h4>
          </div>
        <?php }else{ ?> 
            <div class="col-sm-6 <?php echo ($key + 2 < count($roadmap) ? "border-bottom" : "");?> <?php echo ($key%2 == 0 ? "border-right alt" : "");?> d-flex" style="padding-top: 15px;">
            <h4><?php echo $value["timeline"];?></h4>
            <p><?php echo $value["description"];?></p>
            
          </div>
        <?php } ?>
          <?php } ?>
          
          

      </div>
  </div>
</section>

<section id="exchange bg-white">
  <h2 class="text-center text-green title"><?php echo lang("exchange");?></h2>
  <div class="container">
    <div class="row">
      <?php
      foreach ($exchange as $key => $value) { ?>
       
      <div class="col-2">
        <img src="<?php echo $value["image"];?>" class="w-100" style="height:90px;">
        <a href="<?php echo $value["url"];?>" target="_bank"><?php echo $value["name"];?></a>
      </div>
    <?php } ?>
    </div>
  </div>
</section>


<div class="sign-wrap">
    <svg class="start-block" width="100%" height="160" viewBox="0 0 100 102" preserveAspectRatio="none">
      <path d="M0 100 L0 10 L100 100 Z"></path>
    </svg>
</div>
<section id="mining">
  <div class="container">
  <h2 class="text-right text-green title"><?php echo lang("mining_title");?></h2>
  <br><br>
  <div class="row">
    <div class="col-lg-7">
      <h4><?php echo lang("roller_infomation");?></h4>
      <div class="row">
        <div class="col">
          <?php echo lang("info_name");?>  : Roller Network<br>
          <?php echo lang("info_symbol");?> : ROL<br>
          <?php echo lang("info_type");?> : Proof-of-Work<br>
          <?php echo lang("info_algorithm");?> : Dagger Hashimoto<br>
        </div>
        <div class="col">
          <?php echo lang("info_target");?> : 15 sec<br>
          <?php echo lang("info_rewand");?> : 9 ROL<br>
          <?php echo lang("info_total");?> : 100.000.000 ROL<br>
          <?php echo lang("info_ico");?> - <?php echo lang("info_premice");?>
        </div>
      </div>
      
      
    </div>
    <div class="col-lg-5">
      <h4><?php echo lang("timefork");?></h4>
    300.000 Masternode<br>
    1.200.000 Smart Contract<br>
    2.100.000 Ecosystem<br>
    4.200.000 IoT Services<br>

    </div>
  </div>
  <br>
  <?php echo lang("mining_text_1");?>
  <br><br>
  <div class="row">
    <?php foreach ($pool as $key => $value) { ?>
     
    <div class="col-lg-2 col-sm-12" style="margin-bottom: 15px;">
      <a href="<?php echo $value["url"];?>" target="_bank" class="btn btn-outline-success btn-radius btn-block"><?php echo $value["name"];?></a>
    </div>
  <?php } ?>
  </div>
</div>
<br>
<div class="container">
<code><?php echo $lang["mining_text_2"];?></code>
</div>
<br><br>
  <div class="container">
    <h2 class="text-left text-green title"><?php echo lang("wallet_application");?></h2>
    <div class="row">
      <div class="col-lg-3 col-sm-6" style="margin-bottom: 15px;">
        <div class="card card-body">
          <h4><i class="fa fa-linux"></i> Linux</h4>
          <a href="https://github.com/roller-project/roller/releases/download/1.2.1/geth-linux-amd64.zip"  target="_bank">Geth Ubuntu 64</a><br>
          <a href="https://github.com/roller-project/roller/releases/download/1.2.1/geth-linux-386.zip"  target="_bank">Geth Ubuntu 32</a><br>
          <a href=""  target="_bank">Mist Ubuntu 64</a><br>
          <a href=""  target="_bank">Mist Ubuntu 32</a>
        </div>
      </div>


      <div class="col-lg-3 col-sm-6" style="margin-bottom: 15px;">
        <div class="card card-body">
          <h4><i class="fa fa-apple"></i> Mac OS</h4>
          <a href="https://github.com/roller-project/roller/releases/download/1.2.1/geth-darwin-10.6-amd64.zip"  target="_bank">Geth OS 64</a><br>
          <a href="https://github.com/roller-project/roller/archive/1.2.1.zip"  target="_bank">Geth OS 32</a><br>
          <a href=""  target="_bank">Mist OS 64</a><br>
          <a href=""  target="_bank">Mist OS 32</a>
        </div>
      </div>


      <div class="col-lg-3 col-sm-6" style="margin-bottom: 15px;">
        <div class="card card-body">
          <h4><i class="fa fa-windows"></i> Window</h4>
          <a href="https://github.com/roller-project/roller/releases/download/1.2.1/geth-windows-4.0-amd64.zip" target="_bank">Geth Window 64</a><br>
          <a href="https://github.com/roller-project/roller/releases/download/1.2.1/geth-windows-4.0-386.zip"  target="_bank">Geth Window 32</a><br>
          <a href=""  target="_bank">Mist Window 64</a><br>
          <a href=""  target="_bank">Mist Window 32</a>
        </div>
      </div>


      <div class="col-lg-3 col-sm-6" style="margin-bottom: 15px;">
        <div class="card card-body">
          <h4><i class="fa fa-linux"></i> Web Wallet</h4>
          <a href="https://cms.roller.today" target="_bank">Roller CMS</a>
          <a href=""  target="_bank">MEW CMS</a>
          <a href=""  target="_bank">MyCryto CMS</a>
          <a href=""  target="_bank">MyCryto Window</a>
        </div>
      </div>

      


    </div>
    <br>
    <p class="text-center">Node : https://node.roller.today - Chain ID : 29021982</p>
    <br>
    <div class="text-center">
      <a class="btn btn-lg btn-outline-primary btn-radius" href="#"><i class="fa fa-android"></i> Androi</a>
      <a class="btn btn-lg btn-outline-primary btn-radius"  href="#"><i class="fa fa-apple"></i> Apple Store</a>
    </div>


  </div>

</section>

<section id="team" class="border-bottom">
  
  <div class="container">
    <h2 class="text-center text-green title"><i class="fa fa-book"></i> <?php echo lang("team_title");?></h2>
    <div class="row">
      <?php
      foreach ($development as $key => $value) { ?>
       
      <div class="col-lg-4 col-sm-6" style="margin-bottom: 15px;">
        <div class="box d-flex">
            <div class="left w-25"><img src="<?php echo $value["image"];?>" class="w-100 border" style="padding:3px;"></div>
            <div class="description w-75">
              <h6><?php echo $value["name"];?></h6>
              <strong><?php echo $value["type"];?></strong><br>
              <p><?php echo $value["description"];?></p>
            </div>
           
        </div>

        <div style="margin-top:15px;">
          <?php
            $sol = explode(';', $value["social"]);
            foreach ($sol as $keySol => $valueSol) {
              if(trim($valueSol)){
              @list($sClass, $sUrl) = explode('|', $valueSol);
            ?>
             <a class="icoin border" href="<?php echo $sUrl;?>" target="_bank"><i class="<?php echo $sClass;?>"></i></a>
            <?php
              }
            }
            ?>
          
         
        </div>
         <br>
      </div>
    <?php } ?>
    </div>
    <br>
    <p class="text-center"><b><?php echo lang("developteam_more");?></b></p>
  </div>
</section>
<?php if(is_array($blogs) && $blogs) { ?>
<section id="blog">
  <h2 class="text-center text-green title"><?php echo lang("blogs_title");?></h2>
  <div class="container">
    <div class="row">
      <?php foreach ($blogs as $key => $value) { ?>
        
      <div class="col-lg-4 col-sm-12">
         <div class="blog-card">
            <div class="photo photo1" style="background-image: url(<?php echo $value->thumbnail;?>);"></div>
            <ul class="details">
              <li class="author"><a href="<?php echo $value->url_rewrite;?>"><?php echo ($value->author ? $value->author : "Admin");?></a></li>
              <li class="date"><?php echo $value->updated_at;?></li>
              <li class="tags">
                <ul>
                  <?php 
                  $tags = explode(',', $value->tags);
                  foreach ($tags as $keytags => $valuetags) {
                    ?>
                    <li><a href="/search?tags=<?php echo trim($valuetags);?>"><?php echo trim($valuetags);?></a></li>
                    <?php
                  }
                  ?>
                  
                 
                </ul>
              </li>
            </ul>
            <div class="description">
              <h3><?php echo $value->title;?></h3>
              <h2 style="height: 30px;"><?php echo ($value->short_description ? $value->short_description : " ");?></h2>
              <p class="summary" style="height: 100px;"><?php echo $value->description;?></p>
              <a href="/post-<?php echo $value->url_rewrite;?>.html"><?php echo lang("more");?></a>
            </div>
          </div>
      </div>
    <?php } ?>


     

    </div>
   
   
    </div>
  </div>
</section>
<?php } ?>
<div class="sign-wrap">
    <svg class="start-block" width="100%" height="160" viewBox="0 0 100 102" preserveAspectRatio="none">
      <path d="M0 100 L100 10 L100 100 Z"></path>
    </svg>
</div>

<section id="socical">
  <div class="container">
    <h2 class="text-left text-green title"><?php echo lang("platformcontact");?></h2>
    <br><br>
    <div class="row">
    <?php foreach ($social as $key => $value) { ?>
      <div class="col-lg-2 col-sm-3 text-center">
        <div class="icon"><a href="<?php echo $value["url"];?>" target="_bank"><span class="fa-4x <?php echo $value["icons"];?>"></span></a></div>
      </div>
    <?php }?>
    </div>
  </div>
</section>