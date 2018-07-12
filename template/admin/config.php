<?php echo form_open(admin_url("settings/validate_update"));?>
	<h4>
		
		Settings Board
		<div class="pull-right">
			<?php echo $this->bootstrap->button("save","submit");?>
		</div>
	</h4>
	<hr>
	<div class="form-group row">
	    <label  class="col-sm-2 col-form-label text-right">Site Name</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="config[site_name]" value="<?php echo $this->config->item("site_name");?>">
	    </div>
	</div>


	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">Site Description</label>
	    <div class="col-sm-10">
	      <textarea type="text" class="form-control" name="config[site_description]"><?php echo $this->config->item("site_description");?></textarea>
	    </div>
	</div>



	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">Site Keywords</label>
	    <div class="col-sm-10">
	      <textarea type="text" class="form-control" name="config[site_keywords]"><?php echo $this->config->item("site_keywords");?></textarea>
	    </div>
	</div>


	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">URL Prefix</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="config[url_prefix]" value="<?php echo $this->config->item("url_prefix");?>">
	    </div>
	</div>


	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">Site Email</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="config[site_email]" value="<?php echo $this->config->item("site_email");?>">
	    </div>
	</div>



	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">Site Language</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="config[language]" value="<?php echo $this->config->item("language");?>">
	    </div>
	</div>

	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">&nbsp;</label>
	    <div class="col-sm-10">
	      <?php echo $this->bootstrap->button("save","submit");?>
	    </div>
	</div>

</form>