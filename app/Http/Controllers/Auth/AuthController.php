<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        /*$this->middleware($this->guestMiddleware(), ['except' => ['logout','showRegistrationForm','register']]);
        $this->middleware('admin', ['only' => ['showRegistrationForm','register']]);*/
    }

    /*protected function authenticated(Request $request, User $user)
    {
        return redirect('patients');
                $user = $request->user();

                if($user->id == 1) {
                    return redirect('patients');
                }
                elseif ($user->id ==2) {
                    return redirect('patients');
                }
                elseif ($user->id ==3) {
                    return redirect('patients');

                }
                elseif ($user->id ==4) {
                    return redirect('patients');

                }
                else{
                    return redirect('patients');
                }
            
}*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'role' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'role'=> $data['role'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),    
        ]);
    }
}
