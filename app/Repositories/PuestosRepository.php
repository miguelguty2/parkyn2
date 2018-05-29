<?php

namespace App\Repositories;

use App\Models\Puestos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PuestosRepository
 * @package App\Repositories
 * @version May 25, 2018, 1:05 am UTC
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
        'numero',
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
