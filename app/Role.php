<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable =['name'];
    
  	public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
