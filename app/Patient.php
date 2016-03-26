<?php

namespace App;


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
    	return $this->hasOne('App\PatientVitals');
    }

    public function note()
    {
    	return $this->hasOne('App\Note');
    }

    public function test()
    {
        return $this->hasOne('App\Test');
    }
}