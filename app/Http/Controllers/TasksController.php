<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Carbon\Carbon;

class TasksController extends Controller
{

	public function index() {
		
		$tasks = Task::Incomplete()->where('user_id', auth()->id())->get();
		return view('tasks.index', compact('tasks'));

	}

	public function create() {
		
		return view('tasks.create');
	
	}

	public function get() {

		return Task::Incomplete()->where('user_id', auth()->id())->get();

	}

	public function getIncomplete() {
		$incompleteCounts = [];

		$user_id = auth()->id();

		for($i = 0; $i < 59; $i++) { // TODO: Figure out how to cache the last 58 queries
			$deadline = Carbon::Now()->subMinutes($i);
			$incompleteCounts[$i] = Task::UserId($user_id)->CreatedBefore($deadline)->count() - Task::UserId($user_id)->CompletedBefore($deadline)->count();
		}

		return $incompleteCounts;
	}

	public function store() {

		$this->validate(request(), [
			'title' => 'required'
		]);
		
		Task::create([
			'user_id' => auth()->id(),
			'title' => request('title'),
			'description' => request('description') ? request('description') : ''
		]);

		return redirect('tasks');

	}

	public function edit($id) {
		
		$task = Task::find($id);

		if($task->complete) {
			return back()->withErrors(['message' => 'Task is already complete']);
		}

		$task->completed=true;
		$task->completed_at=Carbon::now();
		$task->save();

		return redirect('tasks');

	}

}
