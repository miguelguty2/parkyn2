<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Prestamos
 * @package App\Models
 * @version May 1, 2018, 9:47 pm UTC
 *
 * @property string Valor_hora
 * @property date fecha
 * @property time Hora_Inicial
 * @property time Hora_Fin
 * @property integer puestos_id
 */
class Prestamos extends Model
{
    

    public $table = 'prestamos';
    

    


    public $fillable = [
        'Valor_hora',
        'fecha',
        'Hora_Inicial',
        'Hora_Fin',
        'puestos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Valor_hora' => 'string',
        'fecha' => 'date',
        'puestos_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Valor_hora' => 'required',
        'fecha' => 'required',
        'Hora_Inicial' => 'required',
        'Hora_Fin' => 'required'
    ];

    
}
