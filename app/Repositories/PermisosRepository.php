<?php

namespace App\Repositories;

use App\Models\Permisos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PermisosRepository
 * @package App\Repositories
 * @version April 8, 2018, 4:02 pm UTC
 *
 * @method Permisos findWithoutFail($id, $columns = ['*'])
 * @method Permisos find($id, $columns = ['*'])
 * @method Permisos first($columns = ['*'])
*/
class PermisosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'modulo',
        'descripcion',
        'roles_id',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Permisos::class;
    }
}
