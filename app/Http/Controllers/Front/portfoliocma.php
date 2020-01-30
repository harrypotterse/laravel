<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\portfolio;
use App\sections_pro;
use Session;

class portfoliocma extends Controller
{
    /*
    |-------------------------------------------------------
    | عرض بيانات المشاريع
     */
    public function portfolio()
    {
        // $value = config('app.timezone');
        //dd($value);
        visits("المشاريع");
        if (Session::get('locale') == "en") {

            $sections_pro = sections_pro::take(5)->orderBy('id', 'DESC')->where('Language', 'English')->get();
            $portfolio = portfolio::orderBy('id', 'DESC')->where('Language', 'English')->paginate(40);
        } else {

            $sections_pro = sections_pro::take(5)->orderBy('id', 'DESC')->where('Language', 'Arabic')->get();
            $portfolio = portfolio::orderBy('id', 'DESC')->where('Language', 'Arabic')->paginate(40);
        }

        return view('front.portfolio')->with(compact('sections_pro', 'portfolio'));

    }

}
