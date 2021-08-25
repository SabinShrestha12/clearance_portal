@extends('layout')
@section('login_staff')
<div class="login_form">
	<div class="container login_form">
		<div class="row">
			<div class="col">
				<img src="{{ asset('images/ku_logo.png') }}" alt="image" class="center" >
				<h2>KU OCS Student Login</h2>
			</div>
			<div class="col">
				<form action = "validate_student" method="post">
					@csrf
					<div class="w-75 p-2">
						<label for="InputEmail" class="form-label">Email</label>
						<input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
						@error('email')
						<div class="alert-warning">
							{{ $message }}
						</div>
						@enderror
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div><br>
						<!-- displaying error message --->
					</div>
					<div class="w-75 p-2">
						<label for="InputPassword" class="form-label">Password</label>
						<input type="password" name = "password" class="form-control" placeholder="Enter password" id="pwd">
						@error('password')
						<div class="alert-warning">
							{{$message}}
						</div>
						@enderror
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.
						</div>
						<input type="submit" class="btn btn-outline-primary" value="Log In">
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"> Sign up</a>
						<a class="dropdown-item" href="#">Forgot password?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection