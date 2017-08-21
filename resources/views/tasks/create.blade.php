@extends('layouts.master')

@section('title')
	Create a Task
@endsection

@section('css')
	<style>
		.form-control {
			margin-bottom: 10px;
		}

		.form-btn {
			min-width: 100px;
			margin-bottom: 10px;
		}
	</style>
@endsection

@section('content')
	
	<form method="POST" action="/tasks">
		{{csrf_field()}}

		<h2>Create A Task</h2>

		<label class="sr-only" for="title">Title:</label>
		<input class="form-control" type="text" id="title" name="title" placeholder="Title" required>

		<label class="sr-only" for="description">Description:</label>
		<textarea class="form-control" type="text" id="description" name="description" placeholder="Description (Optional)"></textarea>

		<div>
			<button class="btn btn-primary form-btn" type="submit">Add</button>
			<a class="btn btn-secondary form-btn" href="/tasks">Cancel</a>
		</div>

	</form>

@endsection

