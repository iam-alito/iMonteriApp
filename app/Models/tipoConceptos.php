<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class TipoConceptos
 * @package App\Models
 * @version April 8, 2018, 3:16 pm UTC
 *
 * @property mediumText descripcion
 * @property integer users_id
 */
class TipoConceptos extends Model
{
    

    public $table = 'tipo_conceptos';
    

    


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
