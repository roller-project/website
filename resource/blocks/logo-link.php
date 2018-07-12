<div class="news">
	<div class="container">
		<div class="text-center header-title">
			<h2><?php echo $value->name;?></h2>
			<div style="max-width: 60%; margin: auto;"><?php echo $value->description;?></div>
		</div>
		<div class="row">
			<?php 
			if(isset($value->json->limit) && intval($value->json->limit) > 0){
			for($i=1; $i<=$value->json->limit; $i++){
				if($i%1 == 0) $eff = @$value->json->effin[0];
				if($i%2 == 0) $eff = (@$value->json->effin[1] ? @$value->json->effin[1] : $eff);
				if($i%3 == 0) $eff = (@$value->json->effin[2] ? @$value->json->effin[2] : $eff);
				if($i%4 == 0) $eff = (@$value->json->effin[3] ? @$value->json->effin[3] : $eff);
			?>
			<div class="col-lg-2 lock fixlayout" data-json-item style="margin-bottom: 30px;">
				<div class="card" sroll-data data-in="<?php echo @$eff;?>">
					<div class="card-body item">
						
						<a data-url_rewrite href="<?php echo store_url('{url}.html');?>">
							<img src="" data-thumbnail>
						</a>
					</div>
				</div>
			</div>
			<?php }
				}
			?>
		</div>
	</div>
</div>
