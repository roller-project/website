<?php echo form_open(admin_url("template/validate_application/{$id}"));?>
<h5>Template Manager
	<div class="pull-right">
		
		<?php echo $this->bootstrap->button("save","submit");?>
	</div>
</h5>
<br>
<div class="row">
	<div class="col-lg-2">
		<div class="card card-body">
			<h5>Page Controller</h5>
			<ul class="listMenu">
				
				<?php foreach ($page as $key => $value) { ?>
					<li><a href="<?php echo admin_url("template/manager/".$value->id);?>"><i class="ti-page"></i> <?php echo $value->title;?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>

	<div class="col-lg-8">
		<div class="card card-body">
			<h5>Data Controller
				<div class="pull-right">
					<?php echo $this->bootstrap->button("save","submit");?>
				</div>
			</h5>
			<hr>

			<?php foreach ($options as $key => $value) { ?>
			<div id="sPanel">

				<?php if(isset($value["name"])) { ?>
					<h5><button onclick="$(this).parent().parent().remove();" class="btn btn-primary btn-sm" style="margin-left: -40px;"> Remove</button> <?php echo $value["name"];?> </h5>
				<?php } ?>
				<?php if(isset($value["title"])) { ?>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Title</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="json[<?php echo $key;?>][title]" value="<?php echo $value["title"];?>">
				    </div>
				</div>
				<?php } ?>
				<?php if(isset($value["content"])) { ?>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Content URL</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="json[<?php echo $key;?>][content];?>" value="<?php echo $value["content"];?>">
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" name="json[<?php echo $key;?>][limit];?>" value="<?php echo $value["limit"];?>">
				    </div>

				</div>
				<?php } ?>
				<?php if(isset($value["description"])) { ?>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Description</label>
				    <div class="col-sm-10">
				      <textarea type="text" class="form-control" rows="5" name="json[<?php echo $key;?>][description];?>"><?php echo $value["description"];?></textarea>
				    </div>
				</div>
				<?php } ?>

				<?php if(isset($value["backgroundurl"])) { ?>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Background Url</label>
				    <div class="col-sm-10">
				      	<div class="input-group input-group-sm mb-2">
					        
					        <input type="text" class="form-control form-control-sm" id="backgroundurl<?php echo $key;?>" name="json[<?php echo $key;?>][backgroundurl]" value="<?php echo @$value["backgroundurl"];?>">
					        <div class="input-group-prepend">
					          <button type="button" class="btn btn-info" data-target-input="#backgroundurl<?php echo $key;?>" data-toggle="modal" data-target="#UploadIDModel">Select</button>
					        </div>
					    </div>
				    </div>
				</div>
			</div>
			<?php } ?>

			<?php } ?>


		</div>
	</div>

	<div class="col-lg-2">
		<div class="card card-body">
			<h5>Data</h5>
		</div>
	</div>
	

</div>
</form>

<?php echo $this->bootstrap->upload();?>