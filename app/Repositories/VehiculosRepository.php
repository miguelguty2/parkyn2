<?php

namespace App\Repositories;

use App\Models\Vehiculos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VehiculosRepository
 * @package App\Repositories
 * @version May 25, 2018, 1:16 am UTC
 *
 * @method Vehiculos findWithoutFail($id, $columns = ['*'])
 * @method Vehiculos find($id, $columns = ['*'])
 * @method Vehiculos first($columns = ['*'])
*/
class VehiculosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'placa',
        'hora_ini',
        'fecha',
        'puestos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vehiculos::class;
    }
}
