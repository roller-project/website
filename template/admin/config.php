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
	    <label class="col-sm-2 col-form-label text-right">Post Type</label>
	    <div class="col-sm-10">
	      <textarea type="text" class="form-control" name="config[post_type]"><?php echo $this->config->item("post_type");?></textarea>
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
	    <label class="col-sm-2 col-form-label text-right">Maintenance</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="config[maintenance]" value="<?php echo $this->config->item("maintenance");?>">
	    </div>
	</div>


	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">Next Fork</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="config[nextfork]" value="<?php echo $this->config->item("nextfork");?>">
	    </div>
	</div>

	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">Site Language</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="config[language]" value="<?php echo $this->config->item("language");?>">
	    </div>
	</div>

	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">Detech Language IP</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="config[autolanguage]" value="<?php echo $this->config->item("autolanguage");?>">
	    </div>
	</div>

	<hr>
	<?php
		$social = [
			"flickr",
			"instagram",
			"google",
			"github",
			"facebook",
			"dropbox",
			"dribbble",
			"apple",
			"android",
			"yahoo",
			"trello",
			"stack-overflow",
			"soundcloud",
			"sharethis",
			"reddit",
			"microsoft",
			"linux",
			"jsfiddle",
			"joomla",
			"html5",
			"css3",
			"drupal",
			"wordpress",
			"tumblr",
			"skype",
			"youtube",
			"vimeo",
			"twitter",
			"linkedin",
			"pinterest",
			
		];
	?>
	
	

	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">Social</label>
	    
	    <div class="col-sm-3">
	      	<select class="form-control selectsocial">
				<?php foreach ($social as $key => $value) { ?>
				<option><?php echo $value;?></option>
				<?php } ?>
			</select>
	    </div>
	    <div class="col-sm-7">
	    	<button class="btn btn-outline-primary" type="button" onclick="addSocial();"><i class="ti-plus"></i> Add</button>
	    </div>
	</div>

	<div class="social">
		<?php $social_db = json_decode($this->config->item("social"));?>
		<?php foreach ($social_db as $keySdb => $valueSdb) { ?>
			<div class="form-group row <?php echo $keySdb;?>">
			    <label class="col-sm-2 col-form-label text-right"><?php echo ucfirst($keySdb);?></label>
			    
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="config[social][<?php echo $keySdb;?>]" value="<?php echo $valueSdb;?>">
			    </div>
			</div>
		<?php } ?>
	</div>


	

	<div class="form-group row">
	    <label class="col-sm-2 col-form-label text-right">&nbsp;</label>
	    <div class="col-sm-10">
	      <?php echo $this->bootstrap->button("save","submit");?>
	    </div>
	</div>

</form>


<script type="text/html" id="socialForm">
	<div class="form-group row {name}">
	    <label class="col-sm-2 col-form-label text-right">{name}</label>
	    
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="config[social][{name}]" value="">
	    </div>
	</div>
</script>
<script type="text/javascript">
	function addSocial(){
		var html = $("#socialForm").html();
		var name = $(".selectsocial").val();
		if(!$(".social ."+name).html()){
			html = html.replace(/{name}/g,name);
			$(".social").append(html);
		}
	}
</script>