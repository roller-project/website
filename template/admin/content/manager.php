<h3>
	Manager Contents
	<div class="pull-right">
		<?php echo $this->bootstrap->link("create",admin_url("content/create/{$type}"));?>
		<?php echo $this->bootstrap->button("delete","submit");?>
	</div>
</h3>
<hr>
<div class="row">
	<div class="col-lg-2">
		<div class="input-group mb-3">
		  <select type="text" class="form-control" onchange="window.location.href='<?php echo admin_url("content/manager/");?>' + this.value;">
		  	<?php foreach ($listType as $key => $value) { ?>
		  		<option value="<?php echo $key;?>" <?php echo ($key == $type ? "selected" : "");?>><?php echo $value;?></option>
		  	<?php } ?>
		  	
		  	
		  </select>
		  
		</div>
	</div>

	<div class="col-lg-8 col-md-6">
		<div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Enter Keyword">
		  <div class="input-group-append">
		   
		    <?php echo $this->bootstrap->button("search","button","outline");?>
		  </div>
		</div>
	</div>


	<div class="col-lg-2 col-md-4">
		<div class="input-group mb-3">
		  <input type="text" class="form-control">
		  <div class="input-group-append">
		    <?php echo $this->bootstrap->button("create","button","outline");?>
		  </div>
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
				<?php echo $this->bootstrap->link("edit",admin_url("content/create/{$type}/".$value->id),"btn-sm outline");?>
				<?php echo $this->bootstrap->link("delete",admin_url("content/delete/{$type}/".$value->id),"btn-sm outline");?>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<?php echo $pages;?>