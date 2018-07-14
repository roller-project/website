<h3>
	Page Manager
	<div class="pull-right">
		<?php echo $this->bootstrap->link("create",admin_url("page/create"));?>
		<?php echo $this->bootstrap->button("delete","submit");?>
	</div>
</h3>
<table class="table table-hover">
	<thead>
		<th>ID</th>
		
		<th>Title</th>
		<th>Create</th>
		<th>On Menu</th>
		<th>Application</th>
		<th>View</th>
		<th></th>
	</thead>
	<tbody>
		<?php foreach ($data as $key => $value) { 
		
			mapData($value,$this->bootstrap);

	 	} ?>
	</tbody>
</table>

<?php function mapData($value, $bootstrap){ ?>
<tr>
	<td><?php echo $value->id;?></td>
	
	<td><?php echo $value->title;?><br>
		
		<?php echo (isset($value->children->parent_name) && isset($value->children->item) ? $value->children->parent_name : "root");?>
	</td>
	<td><?php echo $value->created_at;?></td>
	<td></td>
	<td><?php echo $value->apps_display;?></td>
	<td><?php echo $value->views;?></td>
	<td class="text-right">
		<?php echo $bootstrap->link("edit",admin_url("page/create/".$value->id),"btn-sm outline");?>
		<?php echo $bootstrap->link("delete",admin_url("page/delete/".$value->id),"btn-sm outline");?>
	</td>
</tr>
<?php 
	if(isset($value->children->item) && is_array($value->children->item)){
		foreach ($value->children->item as $key2 => $value2) {
			mapData($value2, $bootstrap);
		}
	}
} ?>