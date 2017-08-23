@extends('master')

@section('title')
	Login
@endsection

@section('css')
	<style>
		form {
			display: block;
			max-width: 330px;
			margin: auto;
		}

		#email {
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
			margin-bottom: -1px;
		}

		#password {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			margin-bottom: 10px;
		}
	</style>
@endsection

@section('content')
	<form method="POST" action="/login">
		{{csrf_field()}}

		<h2>Sign In</h2>

		<label class="sr-only" for="email">Email:</label>
		<input class="form-control" type="email" id="email" name="email" placeholder="Email Address" required>

		<label class="sr-only" for="password">Password:</label>
		<input class="form-control" type="password" id="password" name="password" placeholder="Password" required>

		<button class="btn btn-lg btn-primary btn-block" id="submit" type="submit">Log In</button>

		@include('components.error')
	</form>
@endsection
