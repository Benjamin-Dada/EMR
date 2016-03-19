<?php

namespace App\Http\Controllers;

use App\Patient;

use App\PatientVitals;

use Illuminate\Http\Request;

use App\Http\Requests;

class VitalsController extends Controller
{
    public function index(Patient $patient)//type-hinting therefore the variable has to be the same as the wildcard in the route
    {	
    	//return $patient_id;
    	return view('patients.vitals.form', compact('patient'));//this should 
    }

    public function store(Request $request)
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
        $patientVitals = new PatientVitals;

        $patientVitals->patient_id = $request->input('id');
        $patientVitals->temp   = $request->input('temp');
        $patientVitals->weight = $request->input('weight');
        $patientVitals->height = $request->input('height');
        $patientVitals->bp_sys = $request->input('bp_sys');
        $patientVitals->bp_dias = $request->input('bp_dias');
        $patientVitals->head_cir = $request->input('head_cir');
        $patientVitals->waist_cir = $request->input('waist_cir');
        $patientVitals->bmi = $request->input('bmi');

        /*$patient->id = Auth::user()->id;*/
    
        $patientVitals->save();

        return redirect()->back()->with('info','New Patient Vital has been created successfully');  
        }

    }

    