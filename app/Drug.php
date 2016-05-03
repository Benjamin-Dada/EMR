<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    //protected $table = 'drugs_prescription';

    //public $timestamps = false;

    /*protected $dates = ['duration'];*/
    protected $fillable = [
    	'patient_id', 'name','dose','duration'
    ];  


    public function patient()
	{
	   return $this->belongsTo('App\Patient');
	}
}
