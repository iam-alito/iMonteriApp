<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Elementos
 * @package App\Models
 * @version May 26, 2018, 7:26 pm UTC
 *
 * @property char descripcion
 * @property char lon
 * @property char lat
 * @property char icono
 */
class Elementos extends Model
{
    

    public $table = 'elementos';
    

    


    public $fillable = [
        'descripcion',
        'lon',
        'lat',
        'icono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string',
        'lon' => 'string',
        'lat' => 'string',
        'icono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'lon' => 'required',
        'lat' => 'required',
        'icono' => 'required'
    ];

    
}
