<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class CategoriasElementos
 * @package App\Models
 * @version May 26, 2018, 7:40 pm UTC
 *
 * @property integer categorias_id
 * @property integer elementos_id
 */
class CategoriasElementos extends Model
{
    

    public $table = 'categorias_elementos';
    

    


    public $fillable = [
        'categorias_id',
        'elementos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'categorias_id' => 'integer',
        'elementos_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'categorias_id' => 'required',
        'elementos_id' => 'required'
    ];

    
}
