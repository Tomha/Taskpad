@extends('layouts.master')

@section('title')
	Tasks
@endsection

@section('style')
<style>

	#task-frame {
		border: solid #bbb 1px;
		border-radius: 5px;
		margin-bottom: 10px;
		min-height: 20px;
	}

	.task {
		border-bottom: solid #ddd 1px;
		padding: 5px;
		display: block;
		overflow: hidden;
		white-space: nowrap;
	}

	#task-info {
		margin: 0px;
	}

	form {
		margin: 0px;
	}

	#create-task {
		margin-bottom: 50px;
	}

</style>

@section('content')

	<ul class="list-unstyled" id="task-frame">
		@if(!$tasks->count())
			<li class="task">Create some tasks!</li>
		@else
			@foreach ($tasks as $task)
				<li class="task">
					<form method="POST" action={{"/tasks/complete/" . $task->id}} id={{"form_" . $task->id}}>
						{{ csrf_field() }}
						<input type="checkbox" id="task-complete" name="complete" onclick={{ 'document.getElementById("form_' . $task->id . '").submit()' }}>
						<label for="complete" id="task-info"><span style="font-weight:bold">{{ $task->title }}</span> {{ !$task->description ? '' : ' - ' . $task->description }}</label>
					</form>		
				</li>
			@endforeach
		@endif
	</ul>

	<a href="/tasks/create" class="btn btn-lg btn-primary" id='create-task'>Add Task</a>

@endsection
