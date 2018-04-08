<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Usuarios
 * @package App\Models
 * @version April 8, 2018, 4:26 am UTC
 *
 * @property string name
 * @property string email
 * @property string password
 */
class Usuarios extends Model
{
    

    public $table = 'users';
    

    


    public $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => ''
    ];

    
}
