<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Roles
 * @package App\Models
 * @version April 8, 2018, 4:13 am UTC
 *
 * @property char descripcion
 * @property integer users_id
 */
class Roles extends Model
{
    

    public $table = 'roles';
    

    


    public $fillable = [
        'descripcion',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string',
        'users_id' => 'integer'
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
