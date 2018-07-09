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
		<ul class="list-group">
			<?php foreach ($getListBlock as $key => $value) { ?>
				<li class="list-group-item"><a href="<?php echo admin_url("template/manager/{$value->id}");?>"><?php echo $value->name;?></a></li>
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
				  		<div class="col">
				  			Append ID
				  			<input type="text" class="form-control form-control-sm" name="json[id]" value="<?php echo @$getInfo->json->id;?>">
				  		</div>
				  		<div class="col">
				  			Append Class
				  			<input type="text" class="form-control form-control-sm" name="json[class]" value="<?php echo @$getInfo->json->class;?>">
				  		</div>
				  	</div>
				  	<?php if($append_file) include $append_file;?>
				  	<hr>

				  <button type="submit" class="btn btn-primary">Submit</button>
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