<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Vehiculos
 * @package App\Models
 * @version May 25, 2018, 1:16 am UTC
 *
 * @property char placa
 * @property time hora_ini
 * @property date fecha
 * @property integer puestos_id
 */
class Vehiculos extends Model
{
    

    public $table = 'vehiculos';
    

    


    public $fillable = [
        'placa',
        'hora_ini',
        'fecha',
        'puestos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'placa' => 'string',
        'fecha' => 'date',
        'puestos_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'placa' => 'required',
        'hora_ini' => 'required',
        'fecha' => 'required',
        'puestos_id' => 'required'
    ];

    
}
