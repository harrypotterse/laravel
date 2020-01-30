<?php

namespace App\Http\Controllers\back;

use App\ads;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class adsController extends Controller
{
    private $Path_pictures = "/Front/images/bg/";
    public $db = "الاعلانات";
    public $route = "ads";
    public $route_up = "ads";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = ads::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://image.flaticon.com/icons/svg/2038/2038564.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "600";
        $Settings[] = route('ads.create');
        $Settings[] =  route('ads.create');
        $Columns = array();
        $Columns[] = "الصورة";
        return view('Back.Tables.ads.Presentation', compact('ads', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.ads.addition');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Image' => 'required',
        ], [
            'Image.required' => 'من فضلك لاتترك حقل الصورة فارغا',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }

       


        $ads = new ads();
        $ads->pic =  move($request,$this->Path_pictures,"Image");
        $ads->save();
        return redirect()->back()->with('alert-success', 'تمت اضافة موضوع جديد');
        // Store the blog post...
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $path = $this->Path_pictures;
        $ads = ads::findOrFail($id);
        return view('Back.Tables.ads.Modification')->with(compact('ads', 'path'));
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
        $ads = ads::findOrFail($id);
        return view('Back.Tables.ads.Modification')->with(compact('ads', 'path'));
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
            'old' => 'required',
        ], [
            'old.required' => ' The data field is required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $ads = ads::findOrfail($id);
        $ads->pic =Upload_($request, 1920, 1280, $this->Path_pictures);
        $ads->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $img)
    {
        if (DelFilePath($this->Path_pictures, $img) == true) {
            $ads = ads::findOrfail($id);
            $ads->destroy($id);
            return response()->json([
                'success' => 'Record deleted successfully!',
            ]);
        }
   
    }
}
