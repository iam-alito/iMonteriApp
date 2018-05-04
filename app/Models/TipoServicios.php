<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class TipoServicios
 * @package App\Models
 * @version April 28, 2018, 8:17 pm UTC
 *
 * @property char descripcion
 */
class TipoServicios extends Model
{
    

    public $table = 'tipo_servicios';
    

    


    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string'
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
