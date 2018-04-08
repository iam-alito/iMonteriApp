<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Conceptos
 * @package App\Models
 * @version April 7, 2018, 10:39 pm UTC
 *
 * @property char codigo
 * @property mediumText descripcion
 * @property integer tipo_conceptos_id
 * @property integer estado_id
 * @property integer users_id
 */
class Conceptos extends Model
{
    use SoftDeletes;

    public $table = 'conceptos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'descripcion',
        'tipo_conceptos_id',
        'estado_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'string',
        'tipo_conceptos_id' => 'integer',
        'estado_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'descripcion' => 'required',
        'tipo_conceptos_id' => 'required',
        'estado_id' => 'required'
    ];

    
}
