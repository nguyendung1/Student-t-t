<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use SoftDeletes;
     protected $dates = ['deleted_at'];
    protected $table='students';

    protected $fillable=['name','date_of_birth','school_id','address'];

    public function school()
    {
    	return $this->belongsTo('App\School');
    }
}
