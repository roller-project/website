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
			<div class="card-body"></div>
		</div>
	</div>
	<div class="col-lg-7">
		<div class="card">
			<div class="card-body">
				<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Name Block</label>
				    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  
				  	<div class="form-group">
					    <label for="exampleInputEmail1">Content URL</label>
					    <input type="email" class="form-control form-control-sm">
					</div>

				  	<div class="row">
				  		<div class="col">
				  			<select class="form-control form-control-sm">
				  				<option>Slipt</option>
				  				<option value="yes">Yes</option>
				  				<option value="no">No</option>
				  			</select>
				  		</div>

				  		<div class="col">
				  			<select class="form-control form-control-sm">
				  				<option>Eff IN</option>
				  				<?php
				  				foreach ($eff as $key => $value) {
									if(strpos($value,"In")){
										?>
										<option value="<?php echo $value;?>"><?php echo $value;?></option>
										<?php
									}
									
								}
								?>
				  			</select>
				  		</div>

				  		<div class="col">
				  			<select class="form-control form-control-sm">
				  				<option>Eff Out</option>
				  				<?php
				  				foreach ($eff as $key => $value) {
									if(strpos($value,"Out")){
										?>
										<option value="<?php echo $value;?>"><?php echo $value;?></option>
										<?php
									}
									
								}
								?>
				  			</select>
				  		</div>

				  	</div>
				  	
				  	<hr>

				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="card">
			<div class="card-body"></div>
		</div>
	</div>
</div>