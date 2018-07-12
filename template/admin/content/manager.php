<h3>
	Manager Contents
	<div class="pull-right">
		<?php echo $this->bootstrap->link("create",admin_url("content/create/{$type}"));?>
		<?php echo $this->bootstrap->button("delete","submit");?>
	</div>
</h3>
<div class="row">
	<div class="col-lg-6">
		<div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Enter Keyword">
		  <div class="input-group-append">
		    <button class="btn btn-outline-primary" type="button">Search</button>
		  </div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="input-group mb-3">
		  <input type="text" class="form-control">
		  <div class="input-group-append">
		    <button class="btn btn-outline-danger" type="button">Create Type</button>
		  </div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="input-group mb-3">
		  <select type="text" class="form-control">
		  	<option value="blog">Blog's</option>
		  	<option value="tearm">Devlops's</option>
		  </select>
		  
		</div>
	</div>

</div>
<br>
<table class="table table-hover">
	<thead>
		<th>ID</th>
		<th>Title</th>
		<th>Create</th>
		<th>Public</th>
		<th>View</th>
		<th></th>
	</thead>
	<tbody>
		<?php foreach ($data as $key => $value) { ?>
		
		<tr>
			<td><?php echo $value->id;?></td>
			<td><?php echo $value->title;?></td>
			<td><?php echo $value->created_at;?></td>
			<td><?php echo $value->display_form;?></td>
			<td><?php echo $value->views;?></td>
			<td class="text-right">
				<?php echo $this->bootstrap->link("edit",admin_url("content/create/{$type}/".$value->id),"btn-sm");?>
				<?php echo $this->bootstrap->link("delete",admin_url("content/delete/{$type}/".$value->id),"btn-sm");?>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<?php echo $pages;?>