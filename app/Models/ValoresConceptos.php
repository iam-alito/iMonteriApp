<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ValoresConceptos
 * @package App\Models
 * @version April 8, 2018, 1:34 am UTC
 *
 * @property integer conceptos_id
 * @property integer valor
 */
class ValoresConceptos extends Model
{
    use SoftDeletes;

    public $table = 'valores_conceptos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'conceptos_id',
        'valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'conceptos_id' => 'integer',
        'valor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'conceptos_id' => 'required',
        'valor' => 'required'
    ];

    
}
