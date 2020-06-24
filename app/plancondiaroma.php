<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plancondiaroma extends Model
{
    public $timestamps = false;	
        public $table = "plancondiaroma"; 
         
    
        /**
         * controlador Plantas condimentarías y aromáticas 
         * The attributes that are mass assignable.
         * 
         *
         * @var array
         */
        
         protected $fillable = [
            'id_PanCod', 'nombre', 
        ];
}
