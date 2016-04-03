<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $table = 'drugs_prescription';

    public $timestamps = false;

    protected $fillable = ['patient_id', 'name','dose','duration'];  

    public function patient()
	{
		$this->belongsTo('App\Patient');
	}
}