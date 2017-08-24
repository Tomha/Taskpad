<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Carbon\Carbon;

class TasksController extends Controller
{

	public function index() {
		
		if(!auth()->check()) { // Auth middleware wasn't working properly
			return redirect('');
		}

		$tasks = Task::Incomplete()->where('user_id', auth()->id())->get();
		return view('tasks', compact('tasks'));

	}

	public function remaining() {

		return Task::Incomplete()->where('user_id', auth()->id())->get();

	}

	public function remainingCounts() {

		$user_id = auth()->id();
		$counts = [];

		for($i = 0; $i < 59; $i++) {
			$time = Carbon::Now()->subMinutes($i);
			$allCount = Task::UserID($user_id)->CreatedBefore($time)->count();
			$completeCount =Task::UserID($user_id)->CompletedBefore($time)->count();
			$counts[$i] = $allCount - $completeCount;
		}
		return $counts;
		
	}

	public function store() {

		if(!auth()->check()) { // Auth middleware wasn't working properly
            return back()->withErrors(['message' => 'No logged in user']);
		}

		$this->validate(request(), [
			'title' => 'required'
		]);
		
		Task::create([
			'user_id' => auth()->id(),
			'title' => request('title'),
			'description' => request('description') ? request('description') : ''
		]);

	}

	public function complete($id) {
		
		if(!auth()->check()) { // Auth middleware wasn't working properly
            return back()->withErrors(['message' => 'No logged in user']);
		}

		// Not Working Yet
		//if($user != auth().id) {
        //    return back()->withErrors(['message' => 'You cant complete another user\'s task!']);
		//}

		$task = Task::find($id);
		$task->completed=true;
		$task->completed_at=Carbon::now();
		$task->save();

	}

}
