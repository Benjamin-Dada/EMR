<?php

namespace App\Http\Controllers;

use App\Patient;

use App\Drug;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests;

class DrugsController extends Controller
{
	public function index(Patient $patient)
    {
    	
    	return view('drugs.index', compact('patient'));
    }    

	public function store(Request $request, $patient_id)
	{
		$this->validate($request, [
			'name' => 'required',
			'dose' => 'required',
			'duration'=>'required'
		]);

		$patientDrug = new Drug;
		
/*		$days = Carbon::create(null, 'duration', null, 0);*/
		$patientDrug->patient_id = $patient_id;
		$patientDrug->name = $request->input('name');
		$patientDrug->dose = $request->input('dose');
		$patientDrug->duration = $request->input('duration');

		$patientDrug->save();

		return redirect()->route('patients.index')->with('info', 'Successfully entered.');
	}    
	 public function show($id)
    {
    	$patient = Patient::find($id);
    	return view('drugs.store')->withPatient($patient);
    }
    public function update(Request $request, $id)
        {
            $patient = Patient::findOrFail($id);
            
            $this->validate($request, [
			'name' => 'required',
			'dose' => 'required',
			'duration'=>'required'
			]);

                $values = $request->all();

                $patient->fill($values)->save();

                return redirect()->route('patients.index')->with('info','Your Patient data has been updated successfully');

        }
}
