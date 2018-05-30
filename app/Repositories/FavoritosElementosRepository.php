<?php

namespace App\Repositories;

use App\Models\FavoritosElementos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FavoritosElementosRepository
 * @package App\Repositories
 * @version May 29, 2018, 1:52 pm UTC
 *
 * @method FavoritosElementos findWithoutFail($id, $columns = ['*'])
 * @method FavoritosElementos find($id, $columns = ['*'])
 * @method FavoritosElementos first($columns = ['*'])
*/
class FavoritosElementosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'elementos_id',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FavoritosElementos::class;
    }
}
