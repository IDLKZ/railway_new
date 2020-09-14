<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Header
 * @package App\Models
 * @version September 14, 2020, 2:59 pm UTC
 *
 * @property string $header
 * @property string $subheader
 */
class Header extends Model
{
    //use SoftDeletes;

    public $table = 'headers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'header',
        'subheader'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'header' => 'string',
        'subheader' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'header' => 'required|string|max:255',
        'subheader' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
