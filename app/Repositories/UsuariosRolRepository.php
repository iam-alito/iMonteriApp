<?php

namespace App\Repositories;

use App\Models\UsuariosRol;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuariosRolRepository
 * @package App\Repositories
 * @version April 8, 2018, 4:22 am UTC
 *
 * @method UsuariosRol findWithoutFail($id, $columns = ['*'])
 * @method UsuariosRol find($id, $columns = ['*'])
 * @method UsuariosRol first($columns = ['*'])
*/
class UsuariosRolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'roles_id',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UsuariosRol::class;
    }
}
