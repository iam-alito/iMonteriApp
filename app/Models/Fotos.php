<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Fotos
 * @package App\Models
 * @version May 26, 2018, 7:42 pm UTC
 *
 * @property integer elementos_id
 * @property char foto
 */
class Fotos extends Model
{
    

    public $table = 'fotos';
    

    


    public $fillable = [
        'elementos_id',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'elementos_id' => 'integer',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'elementos_id' => 'required',
        'foto' => 'required'
    ];

    
}
