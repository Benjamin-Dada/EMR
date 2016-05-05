<?php

namespace App\Http\Controllers;

use App\Patient;

use App\Vital;

use Illuminate\Http\Request;

use App\Http\Requests;

class VitalsController extends Controller
{
    public function index(Patient $patient)//type-hinting therefore the variable has to be the same as the wildcard in the route
    {	
    	//$patient = Patient::nurse()->first();
        //dd($patient);
    	return view('patients.vitals.form', compact('patient'));//this should 
    }

    public function store(Request $request, $patient_id)
    {
    	$this->validate($request, [
            'temp'     => 'required|Numeric',
            'weight' => 'required|Numeric',
            'height'    => 'required|Numeric',
            'bp_sys'   => 'required|Numeric',
            'bp_dias' => 'required|Numeric',
            'oxy_sat' => 'required|Numeric',
            'head_cir' => 'required|Numeric',
            'waist_cir' => 'required|Numeric',
            'bmi' => 'required|Numeric',
            'whomToSee' => 'required'
        ]);

        //$patient = new Patient;
        $patientVitals = new Vital;

        $patientVitals->patient_id = $patient_id;
        $patientVitals->temp   = $request->input('temp');
        $patientVitals->weight = $request->input('weight');
        $patientVitals->height = $request->input('height');
        $patientVitals->bp_sys = $request->input('bp_sys');
        $patientVitals->bp_dias = $request->input('bp_dias');
        $patientVitals->head_cir = $request->input('head_cir');
        $patientVitals->waist_cir = $request->input('waist_cir');
        $patientVitals->bmi = $request->input('bmi');
        $patientVitals->whomToSee = $request->input('whomToSee');


        /*$patient->id = Auth::user()->id;*/
    
        $patientVitals->save();

        return redirect()->route('patients.index')->with('info','New Patient vital has been created successfully');  
        }

        public function edit($id)
        {
            $patient = Patient::find($id);
            return view('patients.vitals.edit',compact('patient'));   
        }

        /*public function show()
        {
            return view('patients.index');
        }*/

        public function update(Request $request, $id)
        {
            $patient = Patient::findOrFail($id);
            
           $this->validate($request, [
            'temp'     => 'required|Numeric',
            'weight' => 'required|Numeric',
            'height'    => 'required|Numeric',
            'bp_sys'   => 'required|Numeric',
            'bp_dias' => 'required|Numeric',
            'oxy_sat' => 'required|Numeric',
            'head_cir' => 'required|Numeric',
            'waist_cir' => 'required|Numeric',
            'bmi' => 'required|Numeric'
            ]);

                $values = $request->all();

                $patient->fill($values)->save();

                return redirect()->back()->with('info','Patient Vital updated successfully');
        }
    }


    