<?php

namespace App;

use App\Patient;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'consultation_notes';

    protected $fillable =['patient_id','notes', 'prescription'];

    function patient(){
    	$this->belongsTo('App\Patient');
    }

}
