<?php

namespace App\Http\Controllers;

use App\Patient;

use App\Note;

use App\Test;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index(Patient $patient)
    {
    	//u just pass it in because of the route and not id
        //dd($patient);
    	return view('test.index', compact('patient'));
    }

   /* public function show($id)
    {
    	return view('test.store');
    }*/

    public function store(Request $request, $patient_id)
    {
    	$this->validate($request,[
    		'pcv' => 'required|numeric',
    		'ua' => 'required|numeric',
    		'blood_count' => 'required|numeric',
    		'esr' => 'required|numeric',
    		]);

    	$patientTest = new Test;

    	$patientTest->patient_id = $patient_id;
    	$patientTest->ua = $request->input('ua');
    	$patientTest->blood_count = $request->input('blood_count');
    	$patientTest->pcv = $request->input('pcv');
    	$patientTest->esr = $request->input('esr');

    	$patientTest->save();

    	return redirect()->route('patients.index')->with('info', 'Test Result Sent');
    }

}
