<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    //
    protected  $table='breeds';

    
    protected $fillable=['name'];

    public function cats()
    {
    	return $this->hasMany('App\Cat');
    }
}
