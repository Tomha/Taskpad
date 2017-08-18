@extends('layouts.auth')

@section('title')
	Login
@endsection

@section('form')
	<form method="POST" action="/login" class="form-signin">
		{{csrf_field()}}

		<h2 class="form-signin-heading">Sign In</h2>

		<label class="sr-only" for="email">Email:</label>
		<input class="form-control" type="email" id="email_login" name="email" placeholder="Email Address" required>

		<label class="sr-only" for="password">Password:</label>
		<input class="form-control" type="password" id="password_login" name="password" placeholder="Password" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
	</form>
@endsection
