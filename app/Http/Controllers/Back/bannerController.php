<?php

namespace App\Http\Controllers\back;

use App\banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Routing\Route;

class bannerController extends Controller
{
    private $Path_pictures = "/Front/images/bg/long/";
    public $db = "اعلانات الاقسام";
    public $route = "banner";
    public $route_up = "banner";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banner = banner::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://image.flaticon.com/icons/svg/2208/2208931.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "200";
        $Settings[] = route('banner.create');
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "العنوان";
        $Columns[] = "اللغة";
        return view('Back.Tables.banner.Presentation', compact('banner', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.banner.addition');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $path = $this->Path_pictures;
        $banner = banner::findOrFail($id);
        return view('Back.Tables.banner.Modification')->with(compact('banner', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $path = $this->Path_pictures;
        $banner = banner::findOrFail($id);
        return view('Back.Tables.banner.Modification')->with(compact('banner', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Title' => 'required',
            'old' => 'required',
        ], [
            'Title.required' => 'من فضلك ادخل العنوان',
            'old.required' => ' من فضلك لاتترك حقل الصورة',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $banner = banner::findOrfail($id);
        $banner->Title = $request->input('Title');
        $banner->Image = Upload_($request, 800, 1200, $this->Path_pictures);
        $banner->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
