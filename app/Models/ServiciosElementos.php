<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class ServiciosElementos
 * @package App\Models
 * @version May 26, 2018, 7:44 pm UTC
 *
 * @property integer servicios_id
 * @property integer elementos_id
 */
class ServiciosElementos extends Model
{
    

    public $table = 'servicios_elementos';
    

    


    public $fillable = [
        'servicios_id',
        'elementos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'servicios_id' => 'integer',
        'elementos_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'servicios_id' => 'required',
        'elementos_id' => 'required'
    ];

    
}
