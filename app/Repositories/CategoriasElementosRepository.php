<?php

namespace App\Repositories;

use App\Models\CategoriasElementos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoriasElementosRepository
 * @package App\Repositories
 * @version May 26, 2018, 7:40 pm UTC
 *
 * @method CategoriasElementos findWithoutFail($id, $columns = ['*'])
 * @method CategoriasElementos find($id, $columns = ['*'])
 * @method CategoriasElementos first($columns = ['*'])
*/
class CategoriasElementosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'categorias_id',
        'elementos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CategoriasElementos::class;
    }
}
