<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class UsuariosRol
 * @package App\Models
 * @version April 8, 2018, 4:22 am UTC
 *
 * @property integer roles_id
 * @property integer users_id
 */
class UsuariosRol extends Model
{
    

    public $table = 'usuarios_rols';
    

    


    public $fillable = [
        'roles_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'roles_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roles_id' => 'required',
        'users_id' => 'required'
    ];

    
}
