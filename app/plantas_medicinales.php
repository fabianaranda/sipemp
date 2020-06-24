<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plantas_medicinales extends Model
{
    public $timestamps = false;	
    public $table = "plantas_medicinales"; 
     

    /**
     * controlador Plantas condimentarías y aromáticas 
     * The attributes that are mass assignable.
     * 
     *
     * @var array
     */
    
     protected $fillable = [
        'id', 'nombre', 
    ];
}
