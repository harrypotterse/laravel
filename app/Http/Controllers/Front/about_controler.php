<?php

namespace App\Http\Controllers\front;

use Session;
use App\idea;
use App\steps;
use App\planning;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class about_controler extends Controller
{

    public function Division()
    {
        visits("صفحة معلومات عنا");
        $array = array();
        if (Session::get('locale') == "en") {
            $array['Division1'] = $about = DB::table('about')->get()->where('id', 2)->first();
            $array['Division2'] = $about = DB::table('about')->get()->where('id', 4)->first();
        } else {
            $array['Division1'] = $about = DB::table('about')->get()->where('id', 1)->first();
            $array['Division2'] = $about = DB::table('about')->get()->where('id', 3)->first();
        }
        return $array;
    }

    public function about_controler()
    {
        $array = array();
        if (Session::get('locale') == "en") {
            $array['Division1'] = $about = DB::table('about')->get()->where('id', 2)->first();
            $array['Division2'] = $about = DB::table('about')->get()->where('id', 4)->first();
        } else {
            $array['Division1'] = $about = DB::table('about')->get()->where('id', 1)->first();
            $array['Division2'] = $about = DB::table('about')->get()->where('id', 3)->first();
        }

        return view('Front.about', compact('array'));
    }
    /*
    |-------------------------------------------------------
    عرض بيانات التخطيط
    | php artisan make:model users
     */
    public function planning()
    {
        $array = $this->Division();
        $idea = $this->idea();
        if (Session::get('locale') == "en") {
            $steps = steps::steps(1)->get();
            $planning = planning::take(10)->orderBy('id', 'DESC')->where('Language', 'English')->get();
        } else {
            $steps = steps::steps(2)->get();
            $planning = planning::take(10)->orderBy('id', 'DESC')->where('Language', 'Arabic')->get();
        }
        return view('Front.about', compact('planning', 'array', 'steps','idea'));
    }
    /*
    |-------------------------------------------------------
    عرض بيانات التخطيط للمشروع
    |
     */

    public function idea()
    {
        if (Session::get('locale') == "en") {
            $idea = idea::take(5)->orderBy('id', 'ASC')->where('Language', 'English')->get();

        } else {
            $idea = idea::take(5)->orderBy('id', 'ASC')->where('Language', 'Arabic')->get();
        }
        return $idea;

    }

}
