@extends('layouts.task')

@section('title')
	Tasks
@endsection

@section('content')
	<ul class="list-unstyled">
		@foreach ($tasks as $task)
			<li class="task"><span style="font-weight:bold">{{ $task->title }}:</span> {{ $task->description }}</li>
		@endforeach
	</ul>

	<a href="/tasks/create" class="btn btn-lg btn-primary">Add Task</a>
@endsection
