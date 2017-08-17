@extends('layouts.form')

@section('title')
	Registration
@endsection

@section('style')
	.form-signin input[type="text"] {
		margin-bottom: -1px;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}
	.form-signin input[type="email"] {
		margin-bottom: -1px;
		border-radius: 0;
	}
	#password {
		margin-bottom: -1px;
		border-radius: 0;
	}
	#password_confirmation {
		margin-bottom: 10px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}
	.btn {
		margin-bottom: 10px;
	}
@endsection

@section('form')
	<form method="POST" action="/register" class="form-signin">
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

		<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

		@if (count($errors))
			<div class="form-group alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</form>
@endsection
