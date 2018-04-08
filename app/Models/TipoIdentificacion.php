<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoIdentificacion
 * @package App\Models
 * @version April 8, 2018, 1:58 am UTC
 *
 * @property mediumText descripcion
 * @property integer users_id
 */
class TipoIdentificacion extends Model
{
    use SoftDeletes;

    public $table = 'tipo_identificacions';
    

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
