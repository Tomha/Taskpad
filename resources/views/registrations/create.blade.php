@extends('layouts.auth')

@section('css')
	"css/register.css"
@endsection

@section('title')
	Registration
@endsection

@section('form')
	<form method="POST" action="/register" class="form-signin">
		{{csrf_field()}}

		<h2>Register</h2>

		<label class="sr-only" for="Name">Name:</label>
		<input class="form-control" type="text" id="name" name="name" placeholder="Name" required>

		<label class="sr-only" for="email">Email:</label>
		<input class="form-control" type="email" id="email_register" name="email" placeholder="Email" required>

		<label class="sr-only" for="password">Password:</label>
		<input class="form-control" type="password" id="password" name="password" placeholder="Password" required>

		<label class="sr-only" for="password_confirmation">Password Confirm:</label>
		<input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

		@include('components.errordisplay')
	</form>
@endsection
