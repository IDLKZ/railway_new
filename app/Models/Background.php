<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Background
 * @package App\Models
 * @version September 14, 2020, 3:13 pm UTC
 *
 * @property string $img
 */
class Background extends Model
{
    //use SoftDeletes;

    public $table = 'backgrounds';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'img' => 'required|image|max:10000',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
