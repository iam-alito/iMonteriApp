<?php

namespace App\Repositories;

use App\Models\Combos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CombosRepository
 * @package App\Repositories
 * @version April 10, 2018, 2:26 pm UTC
 *
 * @method Combos findWithoutFail($id, $columns = ['*'])
 * @method Combos find($id, $columns = ['*'])
 * @method Combos first($columns = ['*'])
*/
class CombosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'concepto_combo',
        'concepto_id',
        'estado_id',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Combos::class;
    }
}
