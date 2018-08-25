<div class="loginForm">
	<div class="card">
		<div class="card-body">
			<?php echo form_open(store_url("account/validate_register"));?>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
			  </div>
			  <hr>
			  <div class="row">
			  	<div class="col">
			  		<button type="submit" class="btn btn-primary">Send Register</button>
			  	</div>

			  	<div class="col text-right">
			  		<a class="form-check-label" for="exampleCheck1" href="<?php echo store_url("account/login");?>">Login</a>
			  	</div>

			  </div>
			 
			  
			</form>
		</div>
	</div>
</div>

<style type="text/css">
	.loginForm{
		margin: auto;
		width: 350px;
	}
</style>
<script type="text/javascript">
	$(".loginForm").css({"margin-top" : ($(window).height() - $(".loginForm").height()) / 2});
</script>