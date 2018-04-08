<?php

namespace App\Repositories;

use App\Models\ValoresConceptos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ValoresConceptosRepository
 * @package App\Repositories
 * @version April 8, 2018, 1:34 am UTC
 *
 * @method ValoresConceptos findWithoutFail($id, $columns = ['*'])
 * @method ValoresConceptos find($id, $columns = ['*'])
 * @method ValoresConceptos first($columns = ['*'])
*/
class ValoresConceptosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'conceptos_id',
        'valor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ValoresConceptos::class;
    }
}
