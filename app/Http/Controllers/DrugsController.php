<?php

namespace App\Http\Controllers;

use App\Patient;

use App\Drug;

use Illuminate\Http\Request;

use App\Http\Requests;

class DrugsController extends Controller
{
	public function index()
    {
    	$patient = Patient::all(); 
    	
    	return view('drugs.index')->withPatient($patient);
    }    

	public function store(Request $request, $patient_id)
	{
		$this->validate($request, [
			'name' => 'required',
			'dose' => 'required',
			'duration'=>'required'
		]);

		$patientDrug = new Drug;
		
		$patientDrug->patient_id = $patient_id;
		$patientDrug->name = $request->input('name');
		$patientDrug->dose = $request->input('dose');
		$patientDrug->duration = $request->input('duration');

		$patientDrug->save();

		return redirect()->back()->with('info', 'Successfully entered.');
	}    
	 public function show($id)
    {
    	return view('drugs.store');
    }
}
