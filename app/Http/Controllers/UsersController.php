<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

	public function __construct() {

		$this->middleware('guest', ['except' => 'logout']);

	}

	public function register() {

		return view('signup');

	}

    public function login() {

        return view('signin');

    }

    public function logout() {

        auth()->logout();
        return redirect('');

    }

    public function add() {
        
        if(User::where('email', request('email'))->exists()) {
            return back()->withErrors(['message' => 'Email already in use']);
        }

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

    public function load() {
        
        if(!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors(['message' => 'Incorrect email or password']);
        }

        return redirect('tasks');

    }
}
