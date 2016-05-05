<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{

	//protected $table = 'patients_vitals';

	protected $fillable = [
		'patient_id', 'temp','weight', 'height',
		'bp_sys', 'bp_dias', 'pulse','oxy_sat',
		'head_cir', 'waist_cir', 'BMI', 'whomToSee'
	];
	
	public function patient()
	{
		return $this->belongsTo('App\Patient');
	}    

	/*public function scopePatient($query)
	{ 
		return $query->where('whomToSee', '1');
	}*/

}
