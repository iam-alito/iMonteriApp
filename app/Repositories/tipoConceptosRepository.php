<?php

namespace App\Repositories;

use App\Models\TipoConceptos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoConceptosRepository
 * @package App\Repositories
 * @version April 8, 2018, 3:16 pm UTC
 *
 * @method TipoConceptos findWithoutFail($id, $columns = ['*'])
 * @method TipoConceptos find($id, $columns = ['*'])
 * @method TipoConceptos first($columns = ['*'])
*/
class TipoConceptosRepository extends BaseRepository
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
        return TipoConceptos::class;
    }
}
