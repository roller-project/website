
<div class="container">
    <div class="text-center header-title">
      <h2 class="pb-3 pt-2"><?php echo $value->name;?></h2>
      <p><?php echo $value->description;?></p>
    </div>
    <!--first section-->

    <?php 
      if(isset($value->json->limit) && intval($value->json->limit) > 0){
      for($i=1; $i<=$value->json->limit; $i++){
        if($i%1 == 0) $eff = @$value->json->effin[0];
        if($i%2 == 0) $eff = (@$value->json->effin[1] ? @$value->json->effin[1] : $eff);
        if($i%3 == 0) $eff = (@$value->json->effin[2] ? @$value->json->effin[2] : $eff);
        if($i%4 == 0) $eff = (@$value->json->effin[3] ? @$value->json->effin[3] : $eff);
      ?>
      <?php if($i%2 == 0){ ?>
          <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2 text-center ticks-span"><div><?php echo $i;?></div></div>
            <div class="col-md-5" data-json-item>
              <div sroll-data data-in="<?php echo @$eff;?>">
                <h5 style="margin-top: 0;" data-title>Advanced HTML/CSS editing</h5>
                <p data-content>With Front, you or your team can modify any aspect of your website or pages with HTML/CSS.</p>
              </div>
            </div>
          </div>
      <?php }else { ?> 
          <div class="row">
            <div class="col-md-5 text-right" data-json-item>
              <div sroll-data data-in="<?php echo @$eff;?>">
                <h5 style="margin-top: 0;" data-title>Advanced HTML/CSS editing</h5>
                <p data-content>With Front, you or your team can modify any aspect of your website or pages with HTML/CSS.</p>
              </div>
            </div>
            <div class="col-md-2 text-center ticks-span"><div><?php echo $i;?></div></div>
            <div class="col-md-5"></div>
          </div>
      <?php } ?>
    <?php } 
    }
    ?>
    

</div>

