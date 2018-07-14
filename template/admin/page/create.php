
<?php echo form_open(admin_url("page/validate_post/{$id}"));?>
<h3>
	Page Contents
	<div class="pull-right">
		<?php echo $this->bootstrap->link("back",admin_url("page/manager"));?>
		<?php echo $this->bootstrap->button("save","submit");?>
	</div>
</h3>
<br>
<div class="row">
	<div class="col-lg-9">
		<div class="card">
			<div class="card-body">
				<div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <input type="text" class="form-control form-control-sm" required="" name="title" value="<?php echo @$getInfo->title;?>">
				    
				</div>

				

				  
				  <div class="form-group">
				    <label for="exampleInputDescription">Contents</label>
				    <textarea class="form-control form-control-sm" rows="18" name="content" id="content"><?php echo @$getInfo->content;?></textarea>
				    
				  </div>
			</div>
		</div>
		<br>
		<div class="card">
			<div class="card-body">
				<h4>SEO Panel</h4>
				<div class="form-group">
				    <label for="exampleInputEmail1">URL</label>
				    <input type="text" class="form-control form-control-sm" name="url_rewrite" value="<?php echo @$getInfo->url_rewrite;?>">
				    
				</div>


				<div class="form-group">
				    <label for="exampleInputEmail1">Description</label>
				    <input type="text" class="form-control form-control-sm" name="url_rewrite" value="<?php echo @$getInfo->url_rewrite;?>">
				    
				</div>


				<div class="form-group">
				    <label for="exampleInputEmail1">Keyword</label>
				    <input type="text" class="form-control form-control-sm" name="url_rewrite" value="<?php echo @$getInfo->url_rewrite;?>">
				    
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
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
				<h5>Options</h5>
				<hr>
				Status
				<select class="form-control" name="status">
					<option value="1">Public</option>
					<option value="0">Private</option>
				</select>
				On menu
				<select class="form-control" name="in_menu">
					<option value="1">On Top</option>
					<option value="0">On left</option>
					<option value="1">On bottom</option>
					<option value="0">On Application</option>
				</select>
				Display With Apps Design
				<select class="form-control" name="apps_display">
					<option value="1">Content</option>
					
					
				</select>
				Parent Page

				<select class="form-control">
					<optgroup label="Root Page">
						<option value="">Root Page</option>
					</optgroup>
				</select>
			</div>
		</div>
		

	</div>
</div>
</form>


<?php echo $this->bootstrap->editer('#content');?>
<?php echo $this->bootstrap->upload();?>