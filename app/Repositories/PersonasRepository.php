<?php

namespace App\Repositories;

use App\Models\Personas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PersonasRepository
 * @package App\Repositories
 * @version April 8, 2018, 5:01 pm UTC
 *
 * @method Personas findWithoutFail($id, $columns = ['*'])
 * @method Personas find($id, $columns = ['*'])
 * @method Personas first($columns = ['*'])
*/
class PersonasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'tipo_identificacion_id',
        'identificacion',
        'fecha_nacimiento',
        'direccion',
        'telefono1',
        'telefono2',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Personas::class;
    }
}
