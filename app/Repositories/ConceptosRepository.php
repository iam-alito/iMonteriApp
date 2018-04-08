<?php

namespace App\Repositories;

use App\Models\Conceptos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConceptosRepository
 * @package App\Repositories
 * @version April 8, 2018, 3:18 pm UTC
 *
 * @method Conceptos findWithoutFail($id, $columns = ['*'])
 * @method Conceptos find($id, $columns = ['*'])
 * @method Conceptos first($columns = ['*'])
*/
class ConceptosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'descripcion',
        'tipo_conceptos_id',
        'estado_id',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Conceptos::class;
    }
}
