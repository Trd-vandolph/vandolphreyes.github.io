<?php require('header.php'); ?>

<section>
	<div id="buttons">
		<button class="btn btn-lg btn-primary">Login »</button>	
		<button class="btn btn-lg btn-primary">Signup »</button>
	</div>
	<div style="display: inline-block">
		
	</div>
	<div id="forms" class="login">
		<form class="form-signin">
			<h2 class="form-signin-heading">Please Login</h2>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Firstname</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1" required>
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Lastname</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1" required>
			</div>
			<div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
			</div>
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
	</div>
	<div id="forms" class="signup">
		<form class="form-signin">
			<h2 class="form-signin-heading">Please Sign Up for FREE</h2>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Firstname</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Middlename</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Lastname</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Gender</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Age</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Birthday</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Email Address</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Password</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1">
			</div>
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
        	
      </form>
	</div>
</section>

<?php require('footer.php'); ?>