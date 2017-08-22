@extends('layouts.master')

@section('title')
	Registration
@endsection

@section('css')
	<style>
		form {
			display: block;
			max-width: 330px;
			margin: auto;
		}

		#name {
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
			margin-bottom: -1px;
		}

		#email, #password {
			border-radius: 0px;
			margin-bottom: -1px;
		}

		#password_confirmation {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			margin-bottom: 10px;
		}
	</style>
@endsection

@section('content')
	<form method="POST" action="/register">
		{{csrf_field()}}

		<h2>Register</h2>

		<label class="sr-only" for="Name">Name:</label>
		<input class="form-control" type="text" id="name" name="name" placeholder="Name" required>

		<label class="sr-only" for="email">Email:</label>
		<input class="form-control" type="email" id="email" name="email" placeholder="Email" required>

		<label class="sr-only" for="password">Password:</label>
		<input class="form-control" type="password" id="password" name="password" placeholder="Password" required>

		<label class="sr-only" for="password_confirmation">Password Confirm:</label>
		<input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Register</button>

		@include('components.error')
	</form>
@endsection
