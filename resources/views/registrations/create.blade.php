@extends('layouts.master')

@section('content')
	<h1>Register</h1>

	<form method="POST" action="/register">
		{{csrf_field()}}

		<div>
			<label for="Name">Name:</label>
			<input type="text" id="name" name="name" required>
		</div>

		<div>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
		</div>

		<div>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
		</div>

		<div>
			<label for="password_confirmation">Password Confirm:</label>
			<input type="password" id="password_confirmation" name="password_confirmation" required>
		</div>

		<div>
			<button type="submit">Register</button>
		</div>

		<div>
			@include('components.errors')
		</div>
	</form>
@endsection
