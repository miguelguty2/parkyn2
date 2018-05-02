<?php

namespace App\Repositories;

use App\Models\Puestos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PuestosRepository
 * @package App\Repositories
 * @version April 28, 2018, 8:57 pm UTC
 *
 * @method Puestos findWithoutFail($id, $columns = ['*'])
 * @method Puestos find($id, $columns = ['*'])
 * @method Puestos first($columns = ['*'])
*/
class PuestosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Puestos::class;
    }
}
