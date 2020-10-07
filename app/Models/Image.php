<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Image extends Model
{
    public static function createImage($request,$fs, $name = null){
        $imagename = null;
        if($request->hasFile("img")){
            $img = $request->file("img");
            if($name){
                $file = Str::slug($name).time()."." .$img->getClientOriginalExtension();
            }
            else{
                $file = Str::random(16)."." .$img->getClientOriginalExtension();
            }

            if($img->storeAs($fs,$file)){
                $imagename = $fs.$file;
            };
        }
        return $imagename;
    }

    public static function updateImage($find,$request,$fs,$name = null){

        if($find->img){
            Storage::disk("local")->delete($find->img);
        }
        return self::createImage($request,$fs,$name);
    }

    public static function deleteImage($find){
        if($find->img){
            Storage::disk("local")->delete($find->img);
        }
    }
}
