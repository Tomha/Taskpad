@extends('layouts.master')

@section('title')
	Tasks
@endsection

@section('style')
<style>

	#task-frame {
		background-color: #fff;
		border: solid #aaa 1px;
		border-radius: 8px;
		width: 100%;
	}

	#task {
		border-bottom: solid #ddd 1px;
		padding: 5px;
		display: block;
		overflow: hidden;
		white-space: nowrap;
	}

	#task *, .list-unstyled {
		margin-bottom: 0px;
	}

	.section {
		border-radius: 5px;
		background-color: #eee;
		padding: 15px;
	}

	#checkbox {
		color: eee;
		border-radius: 2px;
		border: 1px #aaa solid;
		margin-right: 5px;
		cursor: pointer;
		padding: 0px 3px 0px 3px;
	}

	#checkbox:hover {
		color: #888;
	}

	#add-task-notice {
		color: #ddd;
		font-size: 42px;
		text-align: center;
		margin: 10px;
	}

	#graph-section {
		margin-left: 20px;
		max-height: 30%;
	}

</style>

@section('content')
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
					</div>

					<button class="btn btn-primary form-btn" type="submit" :disabled="form.errors.any()" @click.prevent="onSubmit">Add Task</button>
					<span class="form-success" v-if="form.success">Success!</span>
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
					<task v-for="task in tasks" @completed="onComplete(task.id)">@{{ task.title }}</task>
				</ul>
			</div>
		</div>

	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/master.js') }}"></script>
	<script>
		window.Event = new Vue();

		Vue.component('task', {  
			template: '<li id="task"><span id="checkbox" @click="$emit(\'completed\', \'test\')">✔</span><slot></slot><li>'
		});

		Vue.component('graph', {
			template: '<canvas></canvas>',

			props: {
				values: {}
			},

			data() {
				this.graph = {};
			},

			methods: {
				updateTaskGraph() {
					this.graph.update();
				},
			},

			mounted() {
				var labels = [];
				for(let i = 1; i < 61; i++) {
					labels.push('');
				}

				var data = {
					labels: labels,
					datasets: [{ 
						data: this.values,
						radius: 0,
					}],
				};

				var options = {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
							},
						}],
						xAxes: [{
							display: true,
						}],
					},
					legend: {
						display: false
					},
					elements: {
						line: {
							tension: 0.1,
						}
					}
				};

				this.graph = new Chart(this.$el.getContext('2d'), {
					type: 'line',
					data: data,
					options: options
				});

				Event.$on('update-graph', () => this.updateTaskGraph());
			}
		});

		new Vue({
			el: '#tasks-app',
		
			data: {
				form: new Form({
					title: '',
					description: ''
				}),
				tasks: { },
				remainingTaskCount: []
			},

			methods: {
				onSubmit() {
					this.form.post('tasks')
						.then(() => {
							this.remainingTaskCount[0] += 1;
							this.updateTaskGraph();
							this.getTasks();
						});
				},

				onComplete(id) {			
					axios.post('/tasks/complete/' + id)
						.then(() => {
							this.remainingTaskCount[0] -= 1;
							this.updateTaskGraph();
							this.getTasks();
						});
				},

				clear(element) {
					this.form.errors.clear(element);
					this.form.clearSuccess()
				},

				getTasks() {
					axios.get('/tasks/get')
						.then(response => this.tasks = response.data);
				},

				updateTaskGraph() {
					Event.$emit('update-graph');
				},

				updateRemainingTaskCount() {
					axios.get('/tasks/get-incomplete')
						.then(response => {
							this.remainingTaskCount[0] = response.data[0]; // 0th entry represents current minute-in-progress
							for(let i = 0; i < 59; i++) {
								this.remainingTaskCount[i+1] = response.data[i];
							}
							this.updateTaskGraph();
						});
				}
			},

			mounted() {
				this.getTasks();

				for(let i = 0; i < 60; i++) {
					this.remainingTaskCount.push(0);
				}
				this.updateRemainingTaskCount();
				setInterval(this.updateRemainingTaskCount,60000);
			}
		});
	</script>
@endsection
