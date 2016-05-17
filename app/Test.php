<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	
    protected $fillable = [
		'patient_id', 'ua', 'blood_count', 'pcv', 
		'esr', 'pap_smear', 'hiv_12_screening', 'hb_ag_test' 
    ];

	public function patient()
	{
		return $this->belongsTo('App\Patient');
	}

}
