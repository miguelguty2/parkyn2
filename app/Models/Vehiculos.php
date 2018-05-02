<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Vehiculos
 * @package App\Models
 * @version April 28, 2018, 8:25 pm UTC
 *
 * @property char placa
 * @property time hora_ini
 * @property date fecha
 */
class Vehiculos extends Model
{
    

    public $table = 'vehiculos';
    

    


    public $fillable = [
        'placa',
        'hora_ini',
        'fecha'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'placa' => 'string',
        'fecha' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'placa' => 'required',
        'hora_ini' => 'required',
        'fecha' => 'required'
    ];

    
}
