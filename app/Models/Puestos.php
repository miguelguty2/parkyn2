<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Puestos
 * @package App\Models
 * @version April 28, 2018, 8:57 pm UTC
 *
 * @property char estado
 */
class Puestos extends Model
{
    

    public $table = 'puestos';
    

    


    public $fillable = [
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estado' => 'required'
    ];

    
}
