<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->all());
        $searchInput = $request->get('keywords');//Input::get('search-input');
        /*
         * Like is dependant on which db is being used
         * LIKE for every other db except pgsql
         * ILIKE for pgsql - used for case insensitive search
         */
        $like = 'like';
        $results = [];
       
        if ($searchInput) {
            $results = Patient::where('name', $like, '%'.$searchInput.'%')->get();
        } else {
            $results = [];
        }
        return view('search', compact('results'));
    }

}
