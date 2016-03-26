<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'lab_tests';

    protected $fillable = ['patient_id', 'ua', 'blood_count', 'pcv', 
    						'esr', 'pap_smear', 'hiv_12_screening', 'hb_ag_test' ];

	public function patient()
	{
		$this->belongsTo('App\Patient');
	}

}
