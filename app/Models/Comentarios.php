<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Comentarios
 * @package App\Models
 * @version May 29, 2018, 1:58 pm UTC
 *
 * @property char comentario
 * @property select elementos_id:integer:unsigned:foreign,elementos,id
 * @property hidden users_id:integer:unsigned:foreign,users,id
 */
class Comentarios extends Model
{
    

    public $table = 'comentarios';
    

    


    public $fillable = [
        'comentario',
        'elementos_id:integer:unsigned:foreign,elementos,id',
        'users_id:integer:unsigned:foreign,users,id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'comentario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'comentario' => 'required',
        'elementos_id:integer:unsigned:foreign,elementos,id' => 'required',
        'users_id:integer:unsigned:foreign,users,id' => 'required'
    ];

    
}
