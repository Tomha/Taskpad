@extends('layouts.task')

@section('css')
	"css/task.css"
@endsection

@section('style')
	/*
	 * Globals
	 */

	@media (min-width: 48em) {
	  html {
		font-size: 18px;
	  }
	}

	body {
		font-family: Georgia, "Times New Roman", Times, serif;
		color: #555;
		background-color: #ddd;
	}

	h1, .h1,
	h2, .h2,
	h3, .h3,
	h4, .h4,
	h5, .h5,
	h6, .h6 {
	  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	  font-weight: normal;
	  color: #333;
	}


	/*
	 * Override Bootstrap's default container.
	 */

	.container {
	  max-width: 60rem;
	}


	.tasks-masthead {
	  margin-bottom: 1rem;
	  background-color: #333;
	  -webkit-box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
			  box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
	}

	/* Nav links */
	.nav-link {
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		position: relative;
		padding: 1rem;
		font-weight: 500;
		color: #cdddeb;
	}
	.nav-link:hover,
	.nav-link:focus {
	  color: #fff;
	  background-color: transparent;
	}

	.page-title {
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-weight: bold;
		font-size: 32px;
		color: #eeeeee;
		margin: 0px;
		padding: 0.5rem;
	}

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
	Create a Task
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
			<button class="btn btn-primary" type="submit">Add</button>
			<a class="btn btn-secondary" href="/tasks">Cancel</a>
		</div>


	</form>
@endsection

