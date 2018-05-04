<?php

namespace App\Repositories;

use App\Models\Servicios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiciosRepository
 * @package App\Repositories
 * @version May 1, 2018, 8:18 pm UTC
 *
 * @method Servicios findWithoutFail($id, $columns = ['*'])
 * @method Servicios find($id, $columns = ['*'])
 * @method Servicios first($columns = ['*'])
*/
class ServiciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_servicios_id',
        'descripcion',
        'valor',
        'icono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Servicios::class;
    }
}
