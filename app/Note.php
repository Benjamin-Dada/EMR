<?php

namespace App;

use App\Patient;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /*import carbon before you start use
    protected $dates = 'non-carbon dates';*/

    protected $fillable =[
    	'patient_id','notes', 'prescription', 'test', 'whomToSee'
    ];

    public function patient()
    {
    	return $this->belongsTo('App\Patient');
    }

}
