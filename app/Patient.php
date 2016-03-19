<?php

namespace App;

use PatientVitals;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients_reg';

    protected $fillable = ['name', 'DOB', 'marital_stat', 'address', 'email', 'phone', 
    						'mm_name', 'kin_name', 'kin_phone', 'kin_address',
    						'occupation', 'employer_name', 'work_address', 'religion'
    						];

    public function patientvitals()
    {
    	return $this->hasOne(Patient::class);
    }
}