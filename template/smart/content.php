<div class="headerTitle"><div class="container"><h2><?php echo $data->title;?></h2></div></div>
<div class="container">
<br>
<div class="row">
	
	<div class="col-lg-10">
		<img src="<?php echo $data->thumbnail;?>" class="w-100">
		<br>
		<br>
		<h3><?php echo $data->title;?></h3>
		<h6><i class="fa fa-tags"></i>
			<?php 
                  $tags = explode(',', $value->tags);
                  foreach ($tags as $keytags => $valuetags) {
                    ?>
                    <a href="/search?tags=<?php echo trim($valuetags);?>"><?php echo trim($valuetags);?></a>
                    <?php
                  }
                  ?>
		</h6>
		<div class="text-content">
			<?php echo $data->content;?>
		</div>
	</div>

	<div class="col-lg-2">
		<div class="card card-body text-center" style="min-height: 300px;">
			Share
			<i class="fa fa-facebook fa-2x"></i>
		</div>
	</div>

</div>

</div>




<div class="sign-wrap" style="padding-bottom: 160px; ">
    <svg class="start-block" width="100%" height="160" viewBox="0 0 100 102" preserveAspectRatio="none">
      <path d="M0 100 L100 10 L100 100 Z"></path>
    </svg>
</div>
<div id="mining" style="padding-bottom: 50px;margin-left: -15px; margin-right: -15px;">
<div class="container">
      <br>
      <h2 class="title">Các bài viết khác</h2>
     
      <div class="row">
      	<?php foreach ($content as $key => $value) { 
      		if($value->id != $data->id){
      		?>
      		
	        <div class="col-4">
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
		              <a href="/post-<?php echo $value->url_rewrite;?>.html">Xem thêm..</a>
		            </div>
		          </div>
		      </div>
	    <?php } 
		}
	    ?>
       

      </div>

        
    </div>
</div>
<!--// End Time Line -->  