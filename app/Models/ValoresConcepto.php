<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class ValoresConcepto
 * @package App\Models
 * @version April 8, 2018, 4:49 pm UTC
 *
 * @property integer concepto_id
 * @property integer valor
 * @property integer users_id
 */
class ValoresConcepto extends Model
{
    

    public $table = 'valores_conceptos';
    

    


    public $fillable = [
        'concepto_id',
        'valor',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'concepto_id' => 'integer',
        'valor' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'concepto_id' => 'required',
        'valor' => 'required'
    ];

    
}
