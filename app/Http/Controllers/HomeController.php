<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //applies the auth middleware to every route except the index method
        $this->middleware('auth', ['except'=>['index']]);

        //I might want to apply the admin middleware to only the register method
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view ('index');    
    }
    

}
