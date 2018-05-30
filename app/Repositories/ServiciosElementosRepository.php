<?php

namespace App\Repositories;

use App\Models\ServiciosElementos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiciosElementosRepository
 * @package App\Repositories
 * @version May 26, 2018, 7:44 pm UTC
 *
 * @method ServiciosElementos findWithoutFail($id, $columns = ['*'])
 * @method ServiciosElementos find($id, $columns = ['*'])
 * @method ServiciosElementos first($columns = ['*'])
*/
class ServiciosElementosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'servicios_id',
        'elementos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ServiciosElementos::class;
    }
}
