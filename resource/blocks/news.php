<div class="news">
	<div class="container">
		<h2><?php echo $value->name;?></h2>
		<div><?php echo $value->description;?></div>

		<div class="row">
			<?php 
			if(isset($value->json->limit) && intval($value->json->limit) > 0){
			for($i=1; $i<=$value->json->limit; $i++){ ?>
			<div class="col-lg-3" style="margin-bottom: 30px;">
				<div class="card" sroll-eff data-in="rollIn" data-out="rollOut">
					<div class="card-body item">
						<h5 class="title">Lorem ipsum dolor sit amet</h5>
						<div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</div>
						<br>
						<a class="btn btn-info btn-sm btn-rate btn-block" href="#">Detail</a>
					</div>
				</div>
			</div>
			<?php }
				}
			?>
		</div>
	</div>
</div>
<style type="text/css">
	.news .btn-rate{
		border-radius: 100px;
	}
</style>