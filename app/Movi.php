<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movi extends Model
{
    protected $table = 'Movies';
    //relacion uno a muchos
            public function categories(){
                return this->hasMany('App\Category');
            }
            //relacion uno a muchos
            public function actors(){
                return this->hasMany('App\Actor');
            }
            //relacion uno a muchos
            public function opinions(){
                return this->hasMany('App\Opinion');
            }
}

