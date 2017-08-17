@extends('layouts.task')

@section('style')
	.task {
		background-color: #eee;
		border: 1px solid #ccc;
		border-radius: 5px;
		margin-bottom: 5px;
		padding: 5px;
	}

	input, textarea {
		margin-bottom: 5px;
	}
@endsection

@section('title')
	Tasks
@endsection

@section('content')
	<form method="POST" action="/tasks">
		{{csrf_field()}}

		<h2>Create A Task</h2>

		<label class="sr-only" for="title">Title:</label>
		<input class="form-control" type="text" id="title" name="title" placeholder="Title" required>

		<label class="sr-only" for="description">Description:</label>
		<textarea class="form-control" type="text" id="description" name="description" placeholder="Description (Optional)"></textarea>

		<button class="btn btn-primary" type="submit">Add</button>
	</form>
@endsection

