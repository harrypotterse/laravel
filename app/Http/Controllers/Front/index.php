<?php
namespace App\Http\Controllers\front;

use App\customers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\tabel_data;
use App\idea;
use App\services;
use App\steps;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Request;

class index extends Controller
{

    public function index()
    {
        $tabe = new tabel_data();
        visits("الصفحة الرئسية");
        //============
        $array = array();
        if (Session::get('locale') == "en") {
            $steps = steps::steps(1)->get();
            $idea = $tabe->idea();
            $customers = $tabe->customers();
            $services = $tabe->services();
            $portfolio = $tabe->portfolio();
            $banner = $tabe->banner();
            $array['Division1'] = $about = DB::table('about')->get()->where('id', 2)->first();
            $array['Division2'] = $about = DB::table('about')->get()->where('id', 4)->first();
            $array['Division3'] = $about = DB::table('about')->get()->where('id', 6)->first();
        } else {
            $idea = $tabe->idea();
            $steps = steps::steps(2)->get();
            $customers = $tabe->customers();
            $services = $tabe->services();
            $portfolio = $tabe->portfolio();
            $banner = $tabe->banner();
            $array['Division1'] = $about = DB::table('about')->get()->where('id', 1)->first();
            $array['Division2'] = $about = DB::table('about')->get()->where('id', 3)->first();
            $array['Division3'] = $about = DB::table('about')->get()->where('id', 5)->first();

        }
        return view('Front.index', compact('array', 'steps', 'idea', 'customers', 'services', 'portfolio', 'banner'));
    }
    public function test()
    {

    }

}
