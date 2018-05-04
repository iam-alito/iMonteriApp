<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Servicios
 * @package App\Models
 * @version May 1, 2018, 8:18 pm UTC
 *
 * @property integer tipo_servicios_id
 * @property char descripcion
 * @property char valor
 * @property char icono
 */
class Servicios extends Model
{
    

    public $table = 'servicios';
    

    


    public $fillable = [
        'tipo_servicios_id',
        'descripcion',
        'valor',
        'icono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipo_servicios_id' => 'integer',
        'descripcion' => 'string',
        'valor' => 'string',
        'icono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo_servicios_id' => 'required',
        'descripcion' => 'required',
        'valor' => 'required'
    ];

    
}
