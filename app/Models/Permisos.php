<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Permisos
 * @package App\Models
 * @version April 8, 2018, 4:02 pm UTC
 *
 * @property char modulo
 * @property mediumText descripcion
 * @property integer roles_id
 * @property integer users_id
 */
class Permisos extends Model
{
    

    public $table = 'permisos';
    

    


    public $fillable = [
        'modulo',
        'descripcion',
        'roles_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'modulo' => 'string',
        'roles_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'modulo' => 'required',
        'roles_id' => 'required'
    ];

    
}
