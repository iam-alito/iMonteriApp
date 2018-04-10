<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Combos
 * @package App\Models
 * @version April 10, 2018, 2:26 pm UTC
 *
 * @property char concepto_combo
 * @property integer concepto_id
 * @property integer estado_id
 * @property integer users_id
 */
class Combos extends Model
{
    

    public $table = 'combos';
    

    


    public $fillable = [
        'concepto_combo',
        'concepto_id',
        'estado_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'concepto_combo' => 'string',
        'concepto_id' => 'integer',
        'estado_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'concepto_combo' => 'required',
        'concepto_id' => 'required',
        'estado_id' => 'required'
    ];

    
}
