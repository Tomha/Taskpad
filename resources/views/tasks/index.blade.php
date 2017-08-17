@extends('layouts.master')

@section('content')
	<h1>{{ auth()->user()->name}}'s Tasks</h1>

	<ul>
		@foreach ($tasks as $task)
			@include ('tasks.task')
		@endforeach
	</ul>
@endsection
