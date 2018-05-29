<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Facturas
 * @package App\Models
 * @version May 25, 2018, 1:34 am UTC
 *
 * @property char numero_factura
 * @property char tiempo
 * @property time hora_final
 * @property char total_pagar
 * @property integer vehiculos_id
 * @property integer users_id
 */
class Facturas extends Model
{
    

    public $table = 'facturas';
    

    


    public $fillable = [
        'numero_factura',
        'tiempo',
        'hora_final',
        'total_pagar',
        'vehiculos_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'numero_factura' => 'string',
        'tiempo' => 'string',
        'total_pagar' => 'string',
        'vehiculos_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero_factura' => 'required',
        'tiempo' => 'required',
        'hora_final' => 'required',
        'total_pagar' => 'required',
        'vehiculos_id' => 'required',
        'users_id' => 'required'
    ];

    
}
