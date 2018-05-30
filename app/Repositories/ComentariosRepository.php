<?php

namespace App\Repositories;

use App\Models\Comentarios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ComentariosRepository
 * @package App\Repositories
 * @version May 29, 2018, 1:58 pm UTC
 *
 * @method Comentarios findWithoutFail($id, $columns = ['*'])
 * @method Comentarios find($id, $columns = ['*'])
 * @method Comentarios first($columns = ['*'])
*/
class ComentariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'comentario',
        'elementos_id:integer:unsigned:foreign,elementos,id',
        'users_id:integer:unsigned:foreign,users,id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comentarios::class;
    }
}
