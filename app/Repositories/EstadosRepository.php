<?php

namespace App\Repositories;

use App\Models\Estados;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstadosRepository
 * @package App\Repositories
 * @version April 8, 2018, 8:15 am UTC
 *
 * @method Estados findWithoutFail($id, $columns = ['*'])
 * @method Estados find($id, $columns = ['*'])
 * @method Estados first($columns = ['*'])
*/
class EstadosRepository extends BaseRepository
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
        return Estados::class;
    }
}
