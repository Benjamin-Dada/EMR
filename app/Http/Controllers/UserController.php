<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests;

class UserController extends Controller
{
	public function index()
	{
    	return view('user.register');
    }    
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|max:255',
            'role' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

    	$user = new User;

    	$user->name = $request->input('name');
    	$user->role = $request->input('role');
    	$user->email = $request->input('email');
    	$user->password = bcrypt($request->input('password'));

    	$user->save();

    	return redirect()->route('patients.index')->with('success','New User has successfully been created');
    }
}
