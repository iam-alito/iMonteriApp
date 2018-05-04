<?php

namespace App\Repositories;

use App\Models\TipoServicios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoServiciosRepository
 * @package App\Repositories
 * @version April 28, 2018, 8:17 pm UTC
 *
 * @method TipoServicios findWithoutFail($id, $columns = ['*'])
 * @method TipoServicios find($id, $columns = ['*'])
 * @method TipoServicios first($columns = ['*'])
*/
class TipoServiciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoServicios::class;
    }
}
