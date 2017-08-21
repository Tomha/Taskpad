@extends('layouts.task')

@section('title')
	Tasks
@endsection

@section('style')
<style>
	#task-frame {
		background: white;
		border: solid black 1px;
		border-radius: 5px;
		margin-bottom: 10px;
	}

	.task {
		border-bottom: solid #ddd 1px;
		padding: 5px;
	}

	#complete {
		padding:100px;
	}

	form {
		margin: 0px;
	}


</style>

@section('content')
	<ul class="list-unstyled" id="task-frame">
		@foreach ($tasks as $task)
			<li class="task">
				<form method="POST" action={{"/tasks/complete/" . $task->id}} id={{"form_" . $task->id}}>
					{{ csrf_field() }}
					<input type="checkbox" id="complete" name="complete" onclick={{ 'document.getElementById("form_' . $task->id . '").submit()' }}>
					<label for="complete"><span style="font-weight:bold">{{ $task->title }}:</span> {{ $task->description }}</label>
					<input type="hidden" name="id" value={{ $task->id }}>
				</form>		
			</li>
		@endforeach
	</ul>

	<a href="/tasks/create" class="btn btn-lg btn-primary">Add Task</a>
@endsection
