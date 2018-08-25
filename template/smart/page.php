
<?php 
if($content){
	if(is_array($content)){
		?>

		<div class="headerTitle"><div class="container"><h2><i class="fa fa-link"></i>  <?php echo $data->title;?></h2></div></div>
		<div class="container">
		<p><?php echo $data->content;?></p>
		
		<div class="row">
		  <?php foreach ($content as $key => $value) { ?>
		   
		  <div class="col-lg-4" style="margin-bottom: 30px;">
		  	
		    <div class="blog-card border">
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
	              <p class="summary" style="height: 80px;"><?php echo $value->description;?></p>
	              <a class="btn btn-outline-success btn-sm" href="/post-<?php echo $value->url_rewrite;?>.html">Xem thêm..</a>
	            </div>
	          </div>
		  </div>
		<?php } ?>
		</div>
		</div>
		<?php
	}else{
		echo $content;
		?>

		<?php
	}
	
}else{
	?>
	
	<div class="headerTitle"><div class="container"><h2><i class="fa fa-link"></i> <?php echo $data->title;?></h2></div></div>
	<div class="container">
	<p><?php echo $data->content;?></p>
	</div>
	<?php
}

?>

