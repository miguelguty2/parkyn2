<?php

namespace App\Repositories;

use App\Models\Facturas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FacturasRepository
 * @package App\Repositories
 * @version May 25, 2018, 1:34 am UTC
 *
 * @method Facturas findWithoutFail($id, $columns = ['*'])
 * @method Facturas find($id, $columns = ['*'])
 * @method Facturas first($columns = ['*'])
*/
class FacturasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero_factura',
        'tiempo',
        'hora_final',
        'total_pagar',
        'vehiculos_id',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Facturas::class;
    }
}
