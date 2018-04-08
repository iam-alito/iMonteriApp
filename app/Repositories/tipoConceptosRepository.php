<?php

namespace App\Repositories;

use App\Models\tipoConceptos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tipoConceptosRepository
 * @package App\Repositories
 * @version April 7, 2018, 10:30 pm UTC
 *
 * @method tipoConceptos findWithoutFail($id, $columns = ['*'])
 * @method tipoConceptos find($id, $columns = ['*'])
 * @method tipoConceptos first($columns = ['*'])
*/
class tipoConceptosRepository extends BaseRepository
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
        return tipoConceptos::class;
    }
}
