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
				<tr>
					<td></td>
					<td></td>
					<td>
						<?php echo $this->bootstrap->link("edit","#","btn-sn outline");?>
						<?php echo $this->bootstrap->link("status","#","btn-sn outline");?>
						<?php echo $this->bootstrap->link("delete","#","btn-sn outline");?>
						<?php echo $this->bootstrap->link("copy","#","btn-sn outline");?>
					</td>
				</tr>

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
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name Folder">
					  </div>
				</form>
			</div>
		</div>
	</div>
</div>