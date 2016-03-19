<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientVitals extends Model
{

	protected $table = 'patients_vitals';

	protected $fillable = ['patient_id', 'temp','weight', 'height',
						  'bp_sys', 'bp_dias', 'pulse','oxy_sat',
						  'head_cir', 'waist_cir', 'BMI'
	];
	public function patient()
	    {
	    	return $this->belongsTo('App\Patient');
	    }    

}
