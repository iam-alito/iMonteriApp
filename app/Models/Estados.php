<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Estados
 * @package App\Models
 * @version April 8, 2018, 8:15 am UTC
 *
 * @property char descripcion
 * @property integer users_id
 */
class Estados extends Model
{
    

    public $table = 'estados';
    

    


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
