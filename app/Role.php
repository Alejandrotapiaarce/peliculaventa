<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'Roles';
     //relacion uno a uno 
    public function persons(){
          return this->hasOne('App\persons');
    }
}
