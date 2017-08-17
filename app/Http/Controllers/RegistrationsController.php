<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationsController extends Controller
{

	public function __construct() {

		$this->middleware('guest');

	}

	public function create() {

		return view('registrations.create');
	}


	public function store() {

		$this->validate(request(), [
			'name'=>'required',
			'email'=>'required|email',
			'password'=>'required|confirmed'
		]);

		$user = \App\User::create([
			'name'=>request('name'),
			'email'=>request('email'),
			'password'=>bcrypt(request('password'))
		]);

		auth()->login($user);

		return redirect('tasks');

	}
}
