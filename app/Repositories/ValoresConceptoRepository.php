<?php

namespace App\Repositories;

use App\Models\ValoresConcepto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ValoresConceptoRepository
 * @package App\Repositories
 * @version April 8, 2018, 4:49 pm UTC
 *
 * @method ValoresConcepto findWithoutFail($id, $columns = ['*'])
 * @method ValoresConcepto find($id, $columns = ['*'])
 * @method ValoresConcepto first($columns = ['*'])
*/
class ValoresConceptoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'concepto_id',
        'valor',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ValoresConcepto::class;
    }
}
