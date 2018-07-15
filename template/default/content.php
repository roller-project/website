<br>
<div class="row">
	<div class="col-lg-2">
		<div class="card card-body">
			Share
		</div>
	</div>
	<div class="col-lg-10">
		<h3><?php echo $data->title;?></h3>
		<?php echo $data->content;?>
	</div>
</div>



<div style="z-index: 99999; background-color: #FFF; position: relative;">
 <div class="container u-space-1">
      
      <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
        
        <h2 class="text-primary">Các bài viết khác
        </h2>
       
      </div>
      <br>
      <div class="row">
      	<?php foreach ($content as $key => $value) { 
      		if($value->id != $data->id){
      		?>
      		
	        <div class="col-sm-6 col-lg-4 mb-7">
	          <!-- Icon Blocks -->
	          <div class="media">
	            <div class="d-flex mr-3">
	            <span class="u-icon u-icon-primary--air u-icon--sm rounded-circle">
	              <span class="u-icon__inner font-weight-bold">0<?php echo ($key+1);?>.</span>
	            </span>
	            </div>
	            <div class="media-body">
	              <h3 class="h6"><a href="<?php echo store_url("post-".$value->url_rewrite.config_item("url_prefix"));?>"><?php echo $value->title;?></a></h3>
	              <p>Đã có <?php echo $value->views;?> lần xem</p>
	              <p>Cập nhập : <?php echo $value->created_at;?></p>
	            </div>
	          </div>
	          <!-- End Icon Blocks -->
	        </div>
	    <?php } 
		}
	    ?>
       

      </div>

        
    </div>

</div>
<!--// End Time Line -->  