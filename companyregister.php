<div role="tabpanel" class="tab-pane fade show row" id="register">
	<div class="container offset-3 col-6">
		<form method="POST" action="home.php" class="was-validated">
		  <div class="form-group row">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" id="uname" placeholder="Enter username" name="email" required >
		    <div class="invalid-feedback">Please fill out this field.</div>
		  </div>
		  <div class="form-group row">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required >
		    <div class="invalid-feedback">Please fill out this field.</div>
		  </div>
		  <div class="form-group row">
		    <label for="pwd">Re-Password:</label>
		    <input type="password" class="form-control" id="rpwd" placeholder="Enter password" name="cfm-password" required >
		    <div class="invalid-feedback">Please fill out this field.</div>
		  </div>
		  <div class="form-group form-check row">
		    <label class="form-check-label">
		      <input class="form-check-input" type="checkbox" name="remember" required  > I agree on terms.
		      <div class="invalid-feedback">Check this checkbox to continue.</div>
		    </label>
		  </div>
		  <button type="submit" name="register" class="btn btn-primary">Register</button>
		</form>
	</div>
</div>