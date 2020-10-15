<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'Sales';
//relacion uno a muchos
        public function series(){
            return this->hasMany('App\Serie');
        }
        public function games(){
            return this->hasMany('App\Game');
        }
        public function movies(){
            return this->hasMany('App\Movi');
        }
        public function products(){
            return this->hasMany('App\Product');
        }
         //relacion uno a uno 
    public function shippings(){
        return this->hasOne('App\Shipping');

}

}
