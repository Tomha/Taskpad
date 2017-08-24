@extends('master')

@section('title')
	Tasks
@endsection

@section('content')
	<div id="app"></div>
	<div id="tasks-app">
		
		<div class="row">
			
			<div class="col section">
				<h1 class="form-heading">Add a Task:</h1>
				<form>
					<div class="form-group" :class="form.errors.class('title')">
						<label class="control-label" for="title">Title</label>
						<input class="form-control" type="text" id="title" name="title" v-model="form.title" @keydown="clear('name')">
						<span v-text="form.errors.get('title')" v-if="form.errors.has('title')"></span>
					</div>

					<div class="form-group" :class="form.errors.class('description')">
						<label class="control-label" for="description">Description (Optional)</label>
						<textarea class="form-control" type="text" id="description" name="description" v-model="form.description" @keydown="clear('description')"></textarea>
						<span v-text="form.errors.get('description')" v-if="form.errors.has('description')"></span>
						<span class="has-success" v-show="form.success">Success!</span>
					</div>

					<button class="btn btn-primary form-btn" type="submit" :disabled="form.errors.any()" @click.prevent="onSubmit">Add Task</button>

				</form>
			</div>

			<div id="graph-section" class="col section">
				<h1 class="form-heading">Tasks Remaining(Past Hour):</h1>
				<graph :values="remainingTaskCount"></graph>
			</div>

		</div>
		
		<div class="row section">
			<h1 class="form-heading">Tasks:</h1>
			<div id="task-frame">
				<p v-if="tasks.length == 0" id="add-task-notice">Add a task to get started!</p>
				<ul class="list-unstyled">
					<task v-for="task in tasks" :key="task.id" @completed="onComplete(task.id)">
						<span id="task-title" slot='title'>@{{ task.title }}</span>
						<span id="task-notes" slot='notes'>@{{ task.description }}</span>
					</task>
				</ul>
			</div>
		</div>

	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/master.js') }}"></script>
	<script src="{{ asset('js/task.js') }}"></script>
@endsection
