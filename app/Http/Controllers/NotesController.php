<?php

namespace App\Http\Controllers;

use App\Patient;

use App\Note;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
 	public function index(Patient $patient)
 	{
      
        //dd($patient);
 		return view('doctor.notes', compact('patient'));
 	}

 	public function store(Request $request, $patient_id)
    {
    	$this->validate($request, [
            'notes'     => 'required',
            'prescription' => 'required',
            'test' => 'required', 
            'whomToSee' => 'required'
        ]);

       // $patient = new Patient;
        $note = new Note;

        $note->patient_id = $patient_id;
        $note->notes   = $request->input('notes');
        $note->prescription   = $request->input('prescription');
        $note->test   = $request->input('test');
        $note->whomToSee   = $request->input('whomToSee');
    
        $note->save();

        return redirect()->route('patients.index')->with('info','Note has been added');  
    }

    public function show(Patient $Patient){
        return view('patients.show', compact('patient'));
    }
}
