<?php echo form_open(admin_url("template/validate_application/{$id}"));?>
<h5>Template Manager
	<div class="pull-right">
		
		<?php echo $this->bootstrap->button("save","submit");?>
	</div>
</h5>
<br>
<div class="row">
	<div class="col-lg-3">
		<div class="card card-body">
			<h5>Page Controller</h5>
			<ul class="listMenu">
				
				<?php foreach ($page as $key => $value) { ?>
					<li><a href="<?php echo admin_url("template/manager/".$value->id);?>"><i class="ti-page"></i> <?php echo $value->title;?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>

	<div class="col-lg-9">
		<div class="card card-body">
			<h5>Data Controller
				<div class="pull-right">
					<?php echo $this->bootstrap->button("save","submit");?>
				</div>
			</h5>
			<hr>

			<?php foreach ($options as $key => $value) { ?>
			<div id="sPanel">

				
					<h5><button onclick="$(this).parent().parent().remove();" class="btn btn-primary btn-sm" style="margin-left: -40px;"> Remove</button> <?php echo (isset($value["name"]) ? $value["name"] : "Block Title");?> </h5>
					<hr>
				<?php if(isset($value["title"])) { ?>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Title</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="json[<?php echo $key;?>][title]" value="<?php echo $value["title"];?>">
				    </div>
				</div>
				<?php } ?>


				<?php if(isset($value["author"])) { ?>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Author</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="json[<?php echo $key;?>][author]" value="<?php echo $value["author"];?>">
				    </div>
				</div>
				<?php } ?>

				<?php if(isset($value["pin"])) { ?>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Pin</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="json[<?php echo $key;?>][pin]" value="<?php echo $value["pin"];?>">
				    </div>
				</div>
				<?php } ?>

				<?php if(isset($value["content"])) { ?>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Content URL</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="json[<?php echo $key;?>][content]" value="<?php echo $value["content"];?>">
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" name="json[<?php echo $key;?>][limit]" value="<?php echo $value["limit"];?>">
				    </div>

				</div>
				<?php } ?>
				<?php if(isset($value["description"])) { ?>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Description</label>
				    <div class="col-sm-10">
				      <textarea type="text" class="form-control" rows="5" name="json[<?php echo $key;?>][description]"><?php echo $value["description"];?></textarea>
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
				<?php if(isset($value["item"]) && is_array($value["item"]) && count($value["item"]) > 0) { ?>

					<div class="form-group row">
					    <label class="col-sm-2 col-form-label">Item Set</label>
					    <div class="col-sm-10">
					    	<?php foreach ($value["item"] as $keyItem => $valueItem) { ?>
					    		
					      	<div class="row">
					      		<div class="col">
					      			Name
					      			<input type="text" name="json[<?php echo $key;?>][item][title]" value="<?php echo @$value["item"]->title[$keyItem];?>" class="form-control">
					      		</div>
					      		<?php if(isset($valueItem["backgroundurl"])) { ?>
					      		<div class="col">
					      			Image
					      			
					      			<div class="input-group input-group-sm mb-2">
					        
							        <input type="text" class="form-control form-control-sm" id="backgroundurl<?php echo $key;?><?php echo $keyItem;?>" name="json[<?php echo $key;?>][item][backgroundurl]" value="<?php echo @$value["item"]["backgroundurl"][$keyItem];?>">
							        <div class="input-group-prepend">
							          <button type="button" class="btn btn-info" data-target-input="#backgroundurl<?php echo $key;?><?php echo $keyItem;?>" data-toggle="modal" data-target="#UploadIDModel">Select</button>
							        </div>
							    </div>
					      		</div>
					      		<?php } ?>
					      		<?php if(isset($valueItem["description"])) { ?>
					      		<div class="col-lg-12">
					      			Description
					      			<textarea class="form-control"></textarea>
					      		</div>
					      		<?php } ?>
					      	</div>
					      <?php } ?>
					    </div>
					</div>
				<?php } ?>
			<?php } ?>


		</div>
	</div>

	
	

</div>
</form>

<?php echo $this->bootstrap->upload();?>