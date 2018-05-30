<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class FavoritosElementos
 * @package App\Models
 * @version May 29, 2018, 1:52 pm UTC
 *
 * @property integer elementos_id
 * @property integer users_id
 */
class FavoritosElementos extends Model
{
    

    public $table = 'favoritos_elementos';
    

    


    public $fillable = [
        'elementos_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'elementos_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'elementos_id' => 'required',
        'users_id' => 'required'
    ];

    
}
