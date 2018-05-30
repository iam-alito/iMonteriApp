<?php

namespace App\Repositories;

use App\Models\Elementos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ElementosRepository
 * @package App\Repositories
 * @version May 26, 2018, 7:26 pm UTC
 *
 * @method Elementos findWithoutFail($id, $columns = ['*'])
 * @method Elementos find($id, $columns = ['*'])
 * @method Elementos first($columns = ['*'])
*/
class ElementosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'lon',
        'lat',
        'icono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Elementos::class;
    }
}
