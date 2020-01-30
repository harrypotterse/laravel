<?php

namespace App\Http\Controllers\Front;

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\tabel_data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class contacts_cma extends Controller
{
    public function contact()
    {
        $array = array();
        visits("صفحة الاتصال");
        if (Session::get('locale') == "en") {
            $array['Division1'] = $contact = DB::table('about')->get()->where('id', 9)->first();

        } else {
            $array['Division1'] = $contact = DB::table('about')->get()->where('id', 8)->first();
          
        }
        return view('Front.contacts', compact('array'));
    }
}
