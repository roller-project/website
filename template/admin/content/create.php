
<?php echo form_open(admin_url("content/validate_post/{$type}/{$id}"));?>
<h3>
	Manager Contents
	<div class="pull-right">
		<?php echo $this->bootstrap->link("back",admin_url("content/manager/{$type}"));?>
		<?php echo $this->bootstrap->button("save","submit");?>
	</div>
</h3>

<div class="row">
	<div class="col-lg-9">
		<div class="card">
			<div class="card-body">
				<div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <input type="text" class="form-control form-control-sm" required="" name="title" value="<?php echo @$getInfo->title;?>">
				    
				</div>

				<div class="form-group">
				    <label for="exampleInputEmail1">URL</label>
				    <input type="text" class="form-control form-control-sm" name="url_rewrite" value="<?php echo @$getInfo->url_rewrite;?>">
				    
				</div>

				  
				  <div class="form-group">
				    <label for="exampleInputDescription">Contents</label>
				    <textarea class="form-control form-control-sm" rows="12" name="content" id="content"><?php echo @$getInfo->content;?></textarea>
				    
				  </div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<?php if(@$getInfo->thumbnail){ ?>
			<div class="card">
				<div class="card-body">
					
						<img src="<?php echo store_url(@$getInfo->thumbnail);?>" style="width: 100%;">
					
				</div>
			</div>
			<br>
		<?php } ?>
		<div class="card">
			<div class="card-body">
				
				Thumnail
				  			
	  			<div class="input-group input-group-sm mb-2">
			        
			        <input type="text" class="form-control form-control-sm" id="backgroundurl" name="thumbnail" value="<?php echo @$getInfo->thumbnail;?>">
			        <div class="input-group-prepend">
			          <button type="button" class="btn btn-info" data-target-input="#backgroundurl" data-toggle="modal" data-target="#UploadIDModel">Select</button>
			        </div>
			    </div>
			</div>
		</div>
		<br>
		<div class="card">
			<div class="card-body">
				<h5>Publish</h5>
			</div>
		</div>
		<br>
		<div class="card">
			<div class="card-body">
				<h5>Category</h5>
			</div>
		</div>
	</div>
</div>
</form>


<?php echo $this->bootstrap->editer('#content');?>
<?php echo $this->bootstrap->upload();?>