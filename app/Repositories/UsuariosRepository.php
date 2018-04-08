<?php

namespace App\Repositories;

use App\Models\Usuarios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuariosRepository
 * @package App\Repositories
 * @version April 8, 2018, 4:26 am UTC
 *
 * @method Usuarios findWithoutFail($id, $columns = ['*'])
 * @method Usuarios find($id, $columns = ['*'])
 * @method Usuarios first($columns = ['*'])
*/
class UsuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usuarios::class;
    }
}
