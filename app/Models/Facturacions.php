<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Facturacions
 * @package App\Models
 * @version May 1, 2018, 10:39 pm UTC
 *
 * @property string n_factura
 * @property date fecha
 * @property time tiempo
 * @property date Valor_total
 * @property integer vehiculos_id
 * @property integer users_id
 * @property integer prestamos_id
 */
class Facturacions extends Model
{
    

    public $table = 'facturacions';
    

    


    public $fillable = [
        'n_factura',
        'fecha',
        'tiempo',
        'Valor_total',
        'vehiculos_id',
        'users_id',
        'prestamos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'n_factura' => 'string',
        'fecha' => 'date',
        'Valor_total' => 'date',
        'vehiculos_id' => 'integer',
        'users_id' => 'integer',
        'prestamos_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'n_factura' => 'required',
        'fecha' => 'required',
        'tiempo' => 'required',
        'Valor_total' => 'required'
    ];

    
}
