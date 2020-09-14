<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class File
 * @package App\Models
 * @version September 14, 2020, 2:40 pm UTC
 *
 * @property \App\Models\Document $document
 * @property integer $document_id
 * @property string $img
 * @property string $type
 */
class File extends Model
{
    //use SoftDeletes;

    public $table = 'files';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'document_id',
        'img',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'document_id' => 'integer',
        'img' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'document_id' => 'required',
        'img' => 'required',
        'type' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function document()
    {
        return $this->belongsTo(\App\Models\Document::class, 'document_id');
    }

    public static function getAllFile(){
        $files = File::all();
        $newfile = [];
        if(count($files)>0){
            foreach ($files as $file){
                $newfile[$file->document_id]["title"] = $file->document->title;
                $newfile[$file->document_id]["links"][$file->type] = $file->img;
            }
        }
        return $newfile;

    }
}
