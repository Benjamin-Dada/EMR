<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
	/**
	 * The attributes that are mass assignable
	 * @var array
	 */
	protected $fillable = [
		'patient_id', 'temp','weight', 'height',
		'bp_sys', 'bp_dias', 'pulse','oxy_sat',
		'head_cir', 'waist_cir', 'BMI', 'whomToSee',
	];

	/**
	 * Relationship between vitals and patient
	 * @return relation
	 */
	public function patient()
	{
		return $this->belongsTo('App\Patient');
	}    

}
