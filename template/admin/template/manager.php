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
				<li><a href="<?php echo admin_url("template/manager/home");?>"><i class="ti-page"></i> Home</a></li>
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


			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">Title</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control">
			    </div>
			</div>

			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">Content URL</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control">
			    </div>
			    <div class="col-sm-2">
			      <input type="text" class="form-control">
			    </div>

			</div>

			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">Description</label>
			    <div class="col-sm-10">
			      <textarea type="text" class="form-control" rows="5"></textarea>
			    </div>
			</div>

			


		</div>
	</div>

	<div class="col-lg-2">
		<div class="card card-body">
			<h5>Data</h5>
		</div>
	</div>
	

</div>