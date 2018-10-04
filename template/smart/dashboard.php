<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo template_url("particles.js");?>"></script>

<div ></div>

<style type="text/css">
  #particles-js{
    background-color: #1b2c42;
   
    background-image: url(<?php echo template_url("image/banner.jpg");?>);
    position: relative;
  }
  .signup {
      padding: 150px 0 100px;
  }
  .signup {
      background-size: cover;
      padding: 100px 0;
  }
  .hero-2 {
      padding: 140px 0 50px;
  }
  .signup h3, .signup p{
    color: #FFF;
  }
  .signup h3{
    text-transform: uppercase;
    font-size: 8rem;
  }
</style>
<div class="slider" id="particles-js">
<?php
$slider = lang("slider");
$value = $slider[0];
?>
<div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="signup hero-2" style="position: absolute; margin: auto;"><?php echo $value["caption"];?></div>
      </div>
    </div>
     
</div>
 
</div>

<script type="text/javascript">
  /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', '/template/smart/particles.json', function() {
  $("#particles-js").height($(window).height() - 150);
  console.log('callback - particles.js config loaded');
});
</script>
<?php
$getdata = @json_decode(@file_get_contents("https://cms.roller.today/cmsApi"));
?>
<section id="infodata">
  <div class="container">
      <div class="row">
          <div class="col-lg-2">
              <h3>CMS</h3>
              <span data-account><?php echo @$getdata->member;?> account</span>
          </div>
          <div class="col-lg-2">
              <h3>Height</h3>
              <span data-block><?php echo @$getdata->blockheight;?></span>
          </div>
          <div class="col-lg-2">
              <h3>Hold</h3>
              <span data-coinhold><?php echo @number_format($getdata->hold);?> ROL</span>
          </div>
          <div class="col-lg-2">
              <h3>Masternode</h3>
              <span data-masternode><?php echo @$getdata->masternode;?></span>
          </div>
          <div class="col-lg-2">
              <h3>Application</h3>
              <span data-apps>7</span>
          </div>
          <div class="col-lg-2">
              <h3>Prices</h3>
              <span data-prices><?php echo @$getdata->prices;?> $</span>
          </div>
      </div>
  </div>
</section>

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

<section id="exchange">
  <h2 class="text-center text-green title"><?php echo lang("exchange");?></h2>
  <div class="container">
    <div class="row"><div class="col text-center"><button class="btn btn-warning btn-lg">Roll List Bitexbay 2019-09-12, Start Trade 2019-09-25</button></div></div>
    <br>
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
          <?php echo lang("info_ico");?>
        </div>
        <div class="col">
          <?php echo lang("info_target");?> : 15 sec<br>
          <?php echo lang("info_rewand");?> : 7 ROL<br>
          Masternode reward : 2 ROL<br>
          <?php echo lang("info_total");?> : 100.000.000 ROL<br>
          <?php echo lang("info_premice");?>
        </div>
      </div>
      
      
    </div>
    <div class="col-lg-5">
      <h4><?php echo lang("timefork");?></h4>
    <b class="text-green">300.000 Masternode</b><br>
    <b class="text-warning">1.200.000 Smart Contracts</b><br>
   
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


<section class="border-bottom border-top">
  <div class="container">
      <h2 class="text-center">Next Fork Cold Staking</h2><br>
      <div class="row">
          
          <div class="col-lg-3 border-right">
              <h3>Block Height</h3>
              <span data-block>1.200.000</span>
          </div>
          
          <div class="col-lg-3 border-right">
              <h3>Masternode Reward</h3>
              <span data-masternode>3 ROL</span>
          </div>
          <div class="col-lg-3 border-right">
              <h3>Hold Banking</h3>
              <span data-account>1.5 ROL</span>
          </div>
          <div class="col-lg-3">
              <h3>Miner Reward</h3>
              <span data-apps>4.5 ROL</span>
          </div>
          
      </div>
      <br>
      <div class="text-center"><a class="btn btn-outline-warning btn-lg" href="/blogs.html">Setup masternode guild</a></div>
      
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