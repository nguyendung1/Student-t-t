<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nguoi extends Model
{
    //
    protected $table='nguoi';
    
    protected $fillable=['name','birh','nguoi_id'];
    public function mooths(){
         return  $this->hasMany('App\Mooth','nguoi_id','id');

    }


}
