<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

ini_set('max_execution_time', 0);

function Upload(Request $request, $w, $h, $path)
{
    if ($request->hasFile('Image')) {
        $image_tmp = Input::file('Image');
        if ($image_tmp->isValid()) {
            $ex = $image_tmp->getClientOriginalExtension();
            $fileName = rand(111, 9999) . '.' . $ex;
            $banner_path = public_path() . $path . $fileName;
            $img = Image::make($image_tmp)->resize($w, $h)->save($banner_path);
        }
        return $fileName;
    }
}
function Upload_(Request $request, $w, $h, $path)
{
    //  dd($request->all());
    if ($request->hasFile('Image')) {
        $filedb = $request->input('old');
        // dd($filedb);
        $DelFilePath = public_path() . $path . $filedb;
        if (file_exists($DelFilePath)) {
            unlink($DelFilePath);
        } else {
        }
        $image_tmp = Input::file('Image');
        if ($image_tmp->isValid()) {
            $ex = $image_tmp->getClientOriginalExtension();
            $fileName = rand(111, 9999) . '.' . $ex;
            // $banner_path = public_path() . $path . $fileName;
            $banner_path = public_path($path . $fileName);
            $img = Image::make($image_tmp)->resize($w, $h)->save($banner_path);
            return $fileName;
        }
    } else {
        $fileName = $request->input('old');
        return $fileName;
    }
}
 function move(Request $request,$path,$name_file){
    if($request->hasFile($name_file)){
        $file = Input::file($name_file);     
            $extension = $file->getClientOriginalExtension();
            $filename = rand(111,99999).'.'.$extension;
            $file->move(public_path().$path, $filename);     
            return $filename ;
      }  
}
function move_(Request $request,$path,$name_file){
    if($request->hasFile($name_file)){
        $file = Input::file($name_file);     
            $extension = $file->getClientOriginalExtension();
            $filename = rand(111,99999).'.'.$extension;
            $file->move(public_path().$path, $filename);     
            return $filename ;
      }  
}
function DelFilePath($pathe, $photo)
{
    $DelFilePath = public_path() . $pathe . $photo;
    if (file_exists($DelFilePath)) {
        unlink($DelFilePath);
        return true;
    } else {
        return false;
    }
}
function latest_additions($tabel)
{
    $array = array();
    $array[] = "label label-primary";
    $array[] = "label label-success";
    $array[] = "label label-info";
    $array[] = "label label-warning";
    $array[] = "label label-danger";
    $array[] = "label label-default";
    $rand = rand(0, 5);
    DB::table('latest_additions')->insert([
        'Subject' => $tabel,
        'Calcinosis' => $array[$rand],
        'user' => "admin",
    ]);
}
function set_lab_lang($lang)
{
    if ($lang == "Arabic") {
        $label = "<span class='label label-success'>$lang</span>";
    } else {
        $label = "<span class='label label-warning'>$lang</span>";
    }
    return $label;

}
function set_lab_social($lang)
{
    $lang = strtoupper($lang);

    if ($lang == "FACEBOOK") {
        $label = "<span class='label label-primary'>$lang</span>";
    } else if ($lang == "INSTAGRAM") {
        $label = "<span class='label label-success'>$lang</span>";
    } else if ($lang == "TWITTER") {
        $label = "<span class='label label-info'>$lang</span>";
    } else if ($lang == "TWITTER") {
        $label = "<span class='label label-danger'>$lang</span>";
    } else {
        $label = "<span class='label label-danger'>$lang</span>";

    }
    return $label;

}
function nl2br_($value)
{
    return nl2br(e($value), false);
}
function visits($pag)
{
    if (DB::table('visits')->where('path',  request()->fullUrl())->exists() == true) {
        if (DB::table('visits')->where('ip',  request()->ip())->exists() == false) {
            $visits = DB::table('visits')->get();
            $visits = DB::table('visits')->get()->where('path',  request()->fullUrl())->first();
            $id = $visits->id;
            $visits_pag = $visits->Visits;
            $vist_count = 1;
            DB::table('visits')->where('id', $id)->increment('Visits', $vist_count);
        } else {
        }
    } else {
        $array = array();
        $array[] = "label label-primary";
        $array[] = "label label-success";
        $array[] = "label label-info";
        $array[] = "label label-warning";
        $array[] = "label label-danger";
        $array[] = "label label-default";
        $rand = rand(0, 5);
        DB::table('visits')->insert([
            'ip' =>  request()->ip(),
            'path' =>  request()->fullUrl(),
            'Visits' => 1,
            'Link' =>  request()->fullUrl(),
            'page' => $pag,
            'label' => $array[$rand],
        ]);
    }
}


function checkIfLinkyouTube($url){
    $rx = '~
                ^(?:https?://)?              # Optional protocol
                 (?:www\.)?                  # Optional subdomain
                 (?:youtube\.com|youtu\.be)  # Mandatory domain name
                 /watch\?v=([^&]+)           # URI with video id as capture group 1
                 ~x';
    $has_match = preg_match($rx,  $url , $matches);
    if(isset($matches[1]) && $matches[1] != ''){
      return true;
    }else{
        return false;
    }
}
