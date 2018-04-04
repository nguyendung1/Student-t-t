<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    //
    protected $table='cats';

  public   $timestamps= false;
    protected $fillable =['name','date_of_birth','id_breed'];

    public function breed()
    {
    	return $this->belongsTo('App\Breed','id','id_breed');
    }
}
