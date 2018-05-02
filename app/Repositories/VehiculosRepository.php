<?php

namespace App\Repositories;

use App\Models\Vehiculos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VehiculosRepository
 * @package App\Repositories
 * @version April 28, 2018, 8:25 pm UTC
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
        'fecha'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vehiculos::class;
    }
}
