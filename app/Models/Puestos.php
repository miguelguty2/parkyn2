<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Puestos
 * @package App\Models
 * @version May 25, 2018, 1:05 am UTC
 *
 * @property char numero
 * @property char estado
 */
class Puestos extends Model
{
    

    public $table = 'puestos';
    

    


    public $fillable = [
        'numero',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'numero' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero' => 'required',
        'estado' => 'required'
    ];

    
}
