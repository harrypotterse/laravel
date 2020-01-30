<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Image;


class Killer extends Controller
{
    
   public function Upload (Request $request,$w,$h,$path){
    if ($request->hasFile('Image')) {
        $image_tmp = Input::file('Image');
        if ($image_tmp->isValid()) {
            $ex = $image_tmp->getClientOriginalExtension();
            $fileName = rand(111, 9999) . '.' . $ex;
            $banner_path = public_path() . $path .  $fileName;
            $img = Image::make($image_tmp)->resize($w, $h)->save($banner_path);
        }
        return $fileName;
    }  
   }
}
