<?php

namespace App\Repositories;

use App\Models\TipoIdentificacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoIdentificacionRepository
 * @package App\Repositories
 * @version April 8, 2018, 4:51 pm UTC
 *
 * @method TipoIdentificacion findWithoutFail($id, $columns = ['*'])
 * @method TipoIdentificacion find($id, $columns = ['*'])
 * @method TipoIdentificacion first($columns = ['*'])
*/
class TipoIdentificacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoIdentificacion::class;
    }
}
