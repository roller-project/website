
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
				    <input type="text" class="form-control form-control-sm" required="" name="title" value="<?php echo @$data->title;?>">
				    
				</div>

				

				  
				  <div class="form-group">
				    <label for="exampleInputDescription">Contents</label>
				    <textarea class="form-control form-control-sm" rows="18" name="content" id="content"><?php echo @$data->content;?></textarea>
				    
				  </div>
			</div>
		</div>
		<br>
		<div class="card">
			<div class="card-body">
				<h4>SEO Panel</h4>
				<div class="form-group">
				    <label for="exampleInputEmail1">URL</label>
				    <input type="text" class="form-control form-control-sm" name="url_rewrite" value="<?php echo @$data->url_rewrite;?>">
				    
				</div>


				<div class="form-group">
				    <label for="exampleInputEmail1">Description</label>
				    <input type="text" class="form-control form-control-sm" name="site_description" value="<?php echo @$data->site_description;?>">
				    
				</div>


				<div class="form-group">
				    <label for="exampleInputEmail1">Keyword</label>
				    <input type="text" class="form-control form-control-sm" name="site_keywords" value="<?php echo @$data->site_keywords;?>">
				    
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="card">
			<div class="card-body">
				Thumnail
				  			
	  			<div class="input-group input-group-sm mb-2">
			        
			        <input type="text" class="form-control form-control-sm" id="backgroundurl" name="thumbnail" value="<?php echo @$data->thumbnail;?>">
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
					<option value="1" <?php echo (@$data->status == 1 ? "selected" : "");?>>Public</option>
					<option value="0" <?php echo (@$data->status == 0 ? "selected" : "");?>>Private</option>
				</select>
				On menu
				<select class="form-control" name="in_menu">
					<option value="" <?php echo (@$data->in_menu == "" ? "selected" : "");?> >None</option>
					<option value="header" <?php echo (@$data->in_menu == "header" ? "selected" : "");?> >Header</option>
					<option value="apps" <?php echo (@$data->in_menu == "apps" ? "selected" : "");?> >Apps Menu</option>
					<option value="footer" <?php echo (@$data->in_menu == "footer" ? "selected" : "");?> >Footer</option>
					
				</select>
				Apps Design
				<select class="form-control" name="apps_display">
					<option value="1">Content</option>
					<?php foreach ($apps as $key => $value) { ?>
						<option value="1"><?php echo $value;?></option>
					<?php } ?>
					
				</select>
				Parent Page

				<select class="form-control" name="parent_id">
					<optgroup label="Root Page">
						<option value="">Root Page</option>
					</optgroup>
					<optgroup label="In Database">
						<?php foreach ($listParent as $key => $value) { 
							if($data->id != $value->id){
							?>
							<option value="<?php echo $value->id;?>" <?php echo (@$data->parent_id == $value->id ? "selected" : "");?>><?php echo $value->title;?></option>
						<?php } 
							}
						?>
					</optgroup>
				</select>
			</div>
		</div>
		

	</div>
</div>
</form>


<?php echo $this->bootstrap->editer('#content');?>
<?php echo $this->bootstrap->upload();?>