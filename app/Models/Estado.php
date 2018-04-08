<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estado
 * @package App\Models
 * @version April 7, 2018, 10:28 pm UTC
 *
 * @property char descripcion
 * @property integer users_id
 */
class Estado extends Model
{
    use SoftDeletes;

    public $table = 'estados';
    

    protected $dates = ['deleted_at'];


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
