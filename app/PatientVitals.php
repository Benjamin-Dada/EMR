<?php

namespace App;

use Patient;
use Illuminate\Database\Eloquent\Model;

class PatientVitals extends Model
{
	public function patient()
	    {
	    	return $this->belongsTo(Patient::class);
	    }    

}
