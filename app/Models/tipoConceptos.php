<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tipoConceptos
 * @package App\Models
 * @version April 7, 2018, 10:30 pm UTC
 *
 * @property mediumText descripcion
 * @property integer users_id
 */
class tipoConceptos extends Model
{
    use SoftDeletes;

    public $table = 'tipo_conceptos';
    

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
