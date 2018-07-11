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
		<th>Parent ID</th>
		<th>Title</th>
		<th>Create</th>
		<th>On Menu</th>
		<th>Public</th>
		<th>View</th>
		<th></th>
	</thead>
	<tbody>
		<?php foreach ($data as $key => $value) { ?>
		
		<tr>
			<td><?php echo $value->id;?></td>
			<th></th>
			<td><?php echo $value->title;?></td>
			<td><?php echo $value->created_at;?></td>
			<td></td>
			<td><?php echo $value->display_form;?></td>
			<td><?php echo $value->views;?></td>
			<td class="text-right">
				<?php echo $this->bootstrap->link("edit",admin_url("content/create/{$type}/".$value->id));?>
				<?php echo $this->bootstrap->link("delete",admin_url("content/delete/{$type}/".$value->id));?>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>