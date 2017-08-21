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
		margin-bottom: 10px;
	}

	#burndown-box {
		display: block;
		margin: auto;
		max-width: 500px;
		max-height: 200px;
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

	<div id="burndown-box">
		<canvas id="burndown-graph"></canvas>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
	<script>
		var ctx = document.getElementById("burndown-graph").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,
						21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,
						41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60],
				datasets: [{
					data: [20,19,18,14,13,14,15,16,14,13,12,13,21,21,20,20,20,19,19,19],
				}]
			},
			options: {
				elements: {
					line: {
						tension: 0,
					},
					point: {
						radius: 0,
					}
				},
		        title: {
					display: true,
					text: 'Remaining Items (Past Hour)',
					fontSize: 24
				},
				legend: {
					display: false
				},
				scales:
				{
					xAxes: [{
						display: false
					}],
					yAxes: [{
						display: true,
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
@endsection
