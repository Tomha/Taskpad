@extends('layouts.form')

@section('title')
	Login
@endsection

@section('style')
	.form-signin input[type="email"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
	}
	.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
@endsection

@section('form')
	<form method="POST" action="/login" class="form-signin">
		{{csrf_field()}}

		<h2 class="form-signin-heading">Sign In</h2>

		<label class="sr-only" for="email">Email:</label>
		<input class="form-control" type="email" id="email" name="email" placeholder="Email Address" required>

		<label class="sr-only" for="password">Password:</label>
		<input class="form-control" type="password" id="password" name="password" placeholder="Password" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
	</form>
@endsection
