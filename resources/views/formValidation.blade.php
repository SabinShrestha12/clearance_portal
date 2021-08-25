	<title>Form Validating page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<h1>Login Page</h1>
	<form action = "validate_form" method="post">
		@csrf
		<div class="form-group">
	    	<label for="email">Email address:</label>
	    	<input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
	    	<!-- displaying error message --->
	    	@error('email')
		    	<div class="alert-warning">
		    		{{ $message }}
		    	</div>
	    	@enderror
	  	</div>
	  	<div class="form-group">
	    	<label for="pwd">Password:</label>
	    	<input type="password" name = "password" class="form-control" placeholder="Enter password" id="pwd">
	    	@error('password')
	    		<div class="alert-warning">
	    			{{$message}}
	    		</div>
	    	@enderror
	  	</div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>