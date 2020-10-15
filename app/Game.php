<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'Games';
    //relacion uno a uno 
   public function categories(){
         return this->hasOne('App\Category');
   }
}
