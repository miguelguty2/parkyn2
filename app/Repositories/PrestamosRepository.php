<?php

namespace App\Repositories;

use App\Models\Prestamos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PrestamosRepository
 * @package App\Repositories
 * @version May 1, 2018, 9:47 pm UTC
 *
 * @method Prestamos findWithoutFail($id, $columns = ['*'])
 * @method Prestamos find($id, $columns = ['*'])
 * @method Prestamos first($columns = ['*'])
*/
class PrestamosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Valor_hora',
        'fecha',
        'Hora_Inicial',
        'Hora_Fin',
        'puestos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prestamos::class;
    }
}
