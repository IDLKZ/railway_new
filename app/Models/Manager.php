<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Manager
 * @package App\Models
 * @version September 14, 2020, 2:04 pm UTC
 *
 * @property string $name
 * @property string $role
 * @property string $description
 * @property string $img
 */
class Manager extends Model
{
//    use SoftDeletes;

    public $table = 'managers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'role',
        'description',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role' => 'string',
        'description' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'role' => 'required|string|max:255',
        'description' => 'required|string|max:500',
        'img' => 'required|image|max:10000',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
