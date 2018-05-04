<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Categorias
 * @package App\Models
 * @version April 21, 2018, 4:59 pm UTC
 *
 * @property char descripcion
 * @property char icono
 */
class Categorias extends Model
{
    

    public $table = 'categorias';
    

    


    public $fillable = [
        'descripcion',
        'icono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string',
        'icono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required'
    ];

    
}
