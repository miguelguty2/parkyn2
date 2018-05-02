<?php

namespace App\Repositories;

use App\Models\Facturacions;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FacturacionsRepository
 * @package App\Repositories
 * @version May 1, 2018, 10:39 pm UTC
 *
 * @method Facturacions findWithoutFail($id, $columns = ['*'])
 * @method Facturacions find($id, $columns = ['*'])
 * @method Facturacions first($columns = ['*'])
*/
class FacturacionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'n_factura',
        'fecha',
        'tiempo',
        'Valor_total',
        'vehiculos_id',
        'users_id',
        'prestamos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Facturacions::class;
    }
}
