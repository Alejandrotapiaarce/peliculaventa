<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'Series';
    //relacion uno a muchos
            public function categories(){
                return this->hasMany('App\Category');
            }
}
