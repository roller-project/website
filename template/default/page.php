<?php 
if($content){
	if(is_array($content)){
		?>
		<h4><?php echo $data->title;?></h4>
		<p><?php echo $data->content;?></p>
		<hr>
		<ul class="row lisItem">
		  <?php foreach ($content as $key => $value) { ?>
		   
		  <li class="col-lg-3 d-flex" style="margin-bottom: 15px;">
		  	
		    <div class="card">
		    <div style="height: 120px; overflow: hidden;">
			  <img class="card-img-top" src="<?php echo store_url($value->thumbnail);?>" alt="<?php echo $value->title;?>">
			</div>
			  <div class="card-body">
			  	<h5 style="overflow: hidden;"><a href="<?php echo store_url("post-".$value->url_rewrite).config_item("url_prefix");?>"><?php echo $value->title;?></a></h5>
		    	
			    <p class="card-text"><?php 
			    
			    echo word_limiter($value->description,10);
			    ?>.</p>
			  </div>
			</div>
		  </li>
		<?php } ?>
		</ul>
		<?php
	}else{
		echo $content;
	}
	
}else{
	?>
	<h4><?php echo $data->title;?></h4>
	<p><?php echo $data->content;?></p>
	<?php
}

?>

