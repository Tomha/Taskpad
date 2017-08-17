@extends('layouts.master')

@section('content')
	<h1>Create a Task</h1>

	<form method="POST" action="/tasks">
		{{csrf_field()}}

		<div>
			<label for="title">Title:</label>
			<input type="text" id="title" name="title" required>
		</div>

		<div>
			<label for="description">Description:</label>
			<input type="text" id="description" name="description">
		</div>

		<div>
			<button type="submit">Add</button>
		</div>

		<div>
			@include('components.errors')
		</div>
	</form>

@endsection
