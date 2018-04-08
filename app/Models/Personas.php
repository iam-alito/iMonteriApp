<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Personas
 * @package App\Models
 * @version April 8, 2018, 5:01 pm UTC
 *
 * @property char nombre
 * @property char apellido
 * @property integer tipo_identificacion_id
 * @property char identificacion
 * @property date fecha_nacimiento
 * @property char direccion
 * @property char telefono1
 * @property char telefono2
 * @property integer users_id
 */
class Personas extends Model
{
    

    public $table = 'personas';
    

    


    public $fillable = [
        'nombre',
        'apellido',
        'tipo_identificacion_id',
        'identificacion',
        'fecha_nacimiento',
        'direccion',
        'telefono1',
        'telefono2',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'tipo_identificacion_id' => 'integer',
        'identificacion' => 'string',
        'fecha_nacimiento' => 'date',
        'direccion' => 'string',
        'telefono1' => 'string',
        'telefono2' => 'string',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'tipo_identificacion_id' => 'required',
        'identificacion' => 'required'
    ];

    
}
