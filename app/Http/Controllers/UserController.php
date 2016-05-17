<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use Illuminate\Support\Facades\Password;

use App\User;

use App\Http\Requests;

class UserController extends Controller
{
    public function __construct()
    {
       $this->middleware('admin',['only'=>'index']);
    }
    
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

        $token = null;

        $data = ['token' => $token, 'user' => $user];

        Mail::send('emails.welcome', ['user' => $user, 'token' => $token], function ($m) use ($user) {
            $m->from('benjamin.o.dada@gmail.com', 'Admin');

            $m->to($user->email, $user->name)->subject('Welcome to Project EMR');
        });

        $user->save();

    	return redirect()->route('patients.index')->with('success','New User has successfully been created');
    }
}
