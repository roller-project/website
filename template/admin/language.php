<h5>
	Language Manager
</h5>
<div class="row">
	<div class="col-lg-8">
		<table class="table table-hover">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th></th>
			</thead>
			<tbody>
				<?php foreach ($data as $key => $value) { ?>
					
				<tr>
					<td><?php echo $value->id;?></td>
					<td><?php echo $value->folder;?> <?php echo ($value->folder == config_item("language") ? "[ Default ]" : "");?></td>
					<td class="text-right">
						<?php echo $this->bootstrap->link("edit","#","btn-sm outline");?>
						
						<?php echo $this->bootstrap->link("delete","#","btn-sm outline");?>
						<a class="btn btn-sm outline btn-capsule px-4 btn-outline-primary" href="#"><i class="ti-copy"></i> Translate</a>
						<?php 
						if($value->folder != config_item("language")){
							?>
							<a class="btn btn-sm outline btn-capsule px-4 btn-outline-primary" href="<?php echo admin_url("settings/copydata/".$value->folder);?>"><i class="ti-copy"></i> Copy Data</a>
							<?php
						}
						?>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="col-lg-4">
		<div class="card">
			<div class="card-body">
				Default Language :
				<?php echo $this->config->item("language");?>
			</div>
		</div>
		<br>
		<div class="card">
			<div class="card-body">
				
					<?php echo form_open(admin_url("settings/validate_language"));?>
					<h3>
						Create
						<div class="pull-right">
							
							<?php echo $this->bootstrap->button("save","submit");?>
						</div>
					</h3>

					<div class="form-group">
					    <label for="exampleInputPassword1">Name</label>
					    <input type="text" class="form-control" name="folder" id="exampleInputPassword1" placeholder="Name Folder">
					  </div>
				</form>
			</div>
		</div>
	</div>
</div>