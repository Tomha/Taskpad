<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //
	public function __construct() {

		$this->middleware('auth');

	}

	public function index() {

		$tasks = Task::Incomplete()->where('user_id', auth()->id());

		return view('tasks.index', compact('tasks'));

	}

	public function create() {

		return view('tasks.create');

	}

	public function store() {

		$this->validate(request(), [
			'title'=>'required'
		]);

		Task::create([
			'user_id'=>auth()->id(),
			'title'=>request('title'),
			'description'=>request('description')
		]);

		return redirect('tasks');

	}

	public function show() {

	}

}
