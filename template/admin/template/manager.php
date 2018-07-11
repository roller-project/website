<script type="text/javascript" src="<?php echo template_url("js/jquery.sortable.js");?>"></script>
<h5>Template Manager
	<div class="pull-right">
		<a class="btn btn-sm btn-info">Home Design</a>
		<a class="btn btn-sm btn-info">Content Layout</a>
		<a class="btn btn-sm btn-info">Find Layout</a>
	</div>
</h5>
<br>
<div class="row">
	<div class="col-lg-2">
		<div class="card">
			<div class="card-body">
				<button class="btn btn-sm btn-primary">Make Cache</button>
			</div>
		</div>
		<br>
		<ul class="list-group sortable">
			<?php foreach ($getListBlock as $key => $value) { ?>
				<li class="list-group-item" id="item-<?php echo $value->id;?>"><a href="<?php echo admin_url("template/manager/{$value->id}");?>"><?php echo $value->name;?></a></li>
			<?php } ?>
			
		</ul>
	</div>
	<div class="col-lg-8">
		<div class="card">
			<div class="card-body">
				<?php if(!$getInfo){ ?>
					Select block Controller
				<?php }else { ?>
				<?php echo form_open(admin_url("template/validate_update/{$id}"));?>
				<h4>
					Manager
					<div class="pull-right">
						<?php echo $this->bootstrap->button("save","submit");?>
				  		<?php echo $this->bootstrap->link("delete",admin_url("template/remove/{$id}"));?>
				  		<?php echo $this->bootstrap->link("status",admin_url("template/status/{$id}"));?>
					</div>
				</h4>
				<hr>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Name Block</label>
				    <input type="text" class="form-control form-control-sm" required="" name="name" value="<?php echo @$getInfo->name;?>">
				    
				  </div>
				  
				  <div class="form-group">
				    <label for="exampleInputDescription">Description</label>
				    <textarea class="form-control form-control-sm" name="description"><?php echo @$getInfo->description;?></textarea>
				    
				  </div>
				  	<div class="row">
				  		

				  		<div class="col">
						  	<div class="form-group">
							    <label for="exampleInputEmail1">Content URL</label>
							    <input type="text" class="form-control form-control-sm" name="json[url]" value="<?php echo @$getInfo->json->url;?>">
							</div>
						</div>

						<div class="col-lg-2">
						  	<div class="form-group">
							    <label for="exampleInputEmail1">Limit</label>
							    <input type="text" class="form-control form-control-sm" name="json[limit]" value="<?php echo @$getInfo->json->limit;?>">
							</div>
						</div>

					</div>

				  	<div class="row">
				  		<div class="col">
				  			<select class="form-control form-control-sm" name="json[effin][]">
				  				<option value="">Eff IN</option>
				  				<?php
				  				foreach ($eff as $key => $value) {
									if(strpos($value,"In")){
										?>
										<option value="<?php echo $value;?>" <?php echo (@$getInfo->json->effin[0] == $value ? "selected" : "");?>><?php echo $value;?></option>
										<?php
									}
									
								}
								?>
				  			</select>
				  		</div>


				  		<div class="col">
				  			<select class="form-control form-control-sm" name="json[effin][]">
				  				<option value="">Eff IN</option>
				  				<?php
				  				foreach ($eff as $key => $value) {
									if(strpos($value,"In")){
										?>
										<option value="<?php echo $value;?>" <?php echo (@$getInfo->json->effin[1] == $value ? "selected" : "");?>><?php echo $value;?></option>
										<?php
									}
									
								}
								?>
				  			</select>
				  		</div>

				  		<div class="col">
				  			<select class="form-control form-control-sm" name="json[effin][]">
				  				<option value="">Eff IN</option>
				  				<?php
				  				foreach ($eff as $key => $value) {
									if(strpos($value,"In")){
										?>
										<option value="<?php echo $value;?>" <?php echo (@$getInfo->json->effin[2] == $value ? "selected" : "");?>><?php echo $value;?></option>
										<?php
									}
									
								}
								?>
				  			</select>
				  		</div>

				  		<div class="col">
				  			<select class="form-control form-control-sm" name="json[effin][]">
				  				<option value="">Eff IN</option>
				  				<?php
				  				foreach ($eff as $key => $value) {
									if(strpos($value,"In")){
										?>
										<option value="<?php echo $value;?>" <?php echo (@$getInfo->json->effin[3] == $value ? "selected" : "");?>><?php echo $value;?></option>
										<?php
									}
									
								}
								?>
				  			</select>
				  		</div>

				  	</div>
				  	<br>
				  	<div class="row">
				  		<div class="col-lg-2">
				  			Append ID
				  			<input type="text" class="form-control form-control-sm" name="json[id]" value="<?php echo @$getInfo->json->id;?>">
				  		</div>
				  		<div class="col-lg-2">
				  			Append Class
				  			<input type="text" class="form-control form-control-sm" name="json[class]" value="<?php echo @$getInfo->json->class;?>">
				  		</div>

				  		

				  		<div class="col-lg-2">
				  			HTML 5
				  			<select class="form-control form-control-sm" name="json[svn]">
				  				<optgroup label="No Select">
				  					<option value="">No select</option>
				  				</optgroup>
				  				<optgroup label="HTML Design">
				  				<?php foreach ($this->bootstrap->svgList() as $key => $value) { ?>
				  					<option value="<?php echo $value;?>" <?php echo (@$getInfo->json->svn == $value ? "selected" : "");?>><?php echo $value;?></option>
				  				<?php } ?>
				  				</optgroup>
				  			</select>
				  			
				  		</div>

				  		<div class="col-lg-2">
				  			Effice
				  			<input type="text" class="form-control form-control-sm" name="json[backgroundeff]" value="<?php echo @$getInfo->json->backgroundeff;?>">
				  		</div>

				  		<div class="col-lg-4">
				  			Background Image
				  			
				  			<div class="input-group input-group-sm mb-2">
						        
						        <input type="text" class="form-control form-control-sm" id="backgroundurl" name="json[backgroundurl]" value="<?php echo @$getInfo->json->backgroundurl;?>">
						        <div class="input-group-prepend">
						          <button type="button" class="btn btn-info" data-target-input="#backgroundurl" data-toggle="modal" data-target="#UploadIDModel">Select</button>
						        </div>
						    </div>
				  		</div>
				  	</div>
				  	<?php if($append_file) include $append_file;?>
				  	<hr>

				  
				  <?php echo $this->bootstrap->button("save","submit");?>
				  <?php echo $this->bootstrap->link("delete",admin_url("template/remove/{$id}"));?>
				</form>
			<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-lg-2">
		<ul class="list-group">
			<?php foreach ($getFileStores as $key => $value) { ?>
				<li class="list-group-item"><?php echo $key;?> <a class="btn btn-sm btn-default pull-right" href="<?php echo admin_url("template/addblock?paths={$value}");?>">+</a></li>
			<?php } ?>
			
		</ul>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".list-group.sortable").sortable({
			    axis: 'y',
			    update: function (event, ui) {
			        var data = $(this).sortable('serialize');

			        // POST to server using $.post or $.ajax
			        $.ajax({
			            data: data,
			            type: 'POST',
			            url: '<?php echo admin_url("template/sorttable");?>'
			        });
			    }
			});
	});
</script>

<?php echo $this->bootstrap->upload();?>