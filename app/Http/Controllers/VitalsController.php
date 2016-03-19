<?php

namespace App\Http\Controllers;

use App\Patient;

use Illuminate\Http\Request;

use App\Http\Requests;

class VitalsController extends Controller
{
    public function index(Patient $patient_id)//type-hinting therefore the variable has to be the same as the wildcard in the route
    {	
    	return view('patients.vitals.form', compact('patient_id'));//this should 
    }

    public function store()
    {
    	$this->validate($request, [
            'temp'     => 'required',
            'weight' => 'required',
            'height'    => 'required',
            'bp_sys'   => 'required',
            'bp_dias' => 'required',
            'oxy_sat' => 'required',
            'head_cir' => 'required',
            'waist_cir' => 'required',
            'bmi' => 'required'
        ]);

        $patient = new Patient;
        $patient->temp   = $request->input('temp');
        $patient->weight = $request->input('weight');
        $patient->height    = $request->input('height');
        $patient->bp_sys = $request->input('bp_sys');
        $patient->bp_dias = $request->input('bp_dias');
        $patient->head_cir = $request->input('head_cir');
        $patient->waist_cir = $request->input('waist_cir');
        $patient->bmi = $request->input('bmi');

        /*$patient->id = Auth::user()->id;*/

        $patient->save();

        return redirect()->route('/')->with('info','New Patient Vital has been created successfully');  
        }

    }

    