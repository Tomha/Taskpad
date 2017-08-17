@extends('layouts.master')

@section('content')
	<h1>Login</h1>

	<form method="POST" action="/login">
		{{csrf_field()}}

		<div>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
		</div>

		<div>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
		</div>

		<div>
			<button type="submit">Log In</button>
		</div>

		<div>
			@include('components.errors')
		</div>
	</form>
@endsection
