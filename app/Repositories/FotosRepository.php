<?php

namespace App\Repositories;

use App\Models\Fotos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FotosRepository
 * @package App\Repositories
 * @version May 26, 2018, 7:42 pm UTC
 *
 * @method Fotos findWithoutFail($id, $columns = ['*'])
 * @method Fotos find($id, $columns = ['*'])
 * @method Fotos first($columns = ['*'])
*/
class FotosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'elementos_id',
        'foto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fotos::class;
    }
}
