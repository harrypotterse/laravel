<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\services;
use Illuminate\Http\Request;
use Validator;

class servicesController extends Controller
{
    private $Path_pictures = "/Front/images/services/";
    public $db = "الخدمات";
    public $route = "services";
    public $route_up = "services";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = services::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://image.flaticon.com/icons/svg/2208/2208931.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "العنوان";
        $Columns[] = "العنوان الفرعي";
        $Columns[] = "اللغة";
        return view('Back.Tables.services.Presentation', compact('services', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.services.addition');

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
            'Title' => 'required',
            'Subtitle' => 'required',
            'Image' => 'required',
            'Language' => 'required',
        ], [
            'Title.required' => 'من فضلك ادخل العنوان',
            'Subtitle.required' => ' من فضلك ادخل العنوان الفرعي',
            'Image.required' => 'من فضلك ادخل الصورة',
            'Language.required' => 'من فضلك ادخل اللغة',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $services = new services();
        $services->Title = $request->input('Title');
        $services->Subtitle = $request->input('Subtitle');
        $services->Image = Upload($request, 1024, 683, $this->Path_pictures);
        $services->Language = $request->input('Language');
        $services->save();
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
        $services = services::findOrFail($id);
        return view('Back.Tables.services.Modification')->with(compact('services', 'path'));
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
        $services = services::findOrFail($id);
        return view('Back.Tables.services.Modification')->with(compact('services', 'path'));
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
            'Subtitle' => 'required',
            'old' => 'required',
        ], [
            'Title.required' => 'من فضلك ادخل العنوان',
            'Subtitle.required' => ' من فضلك ادخل العنوان الفرعي',
            'old.required' => 'من فضلك ادخل الصورة',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $services = services::findOrfail($id);
        $services->Title = $request->input('Title');
        $services->Subtitle = $request->input('Subtitle');
        $services->Image = Upload_($request,1024, 683, $this->Path_pictures);
        $services->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$img)
    {
        if (DelFilePath($this->Path_pictures, $img) == true) {
            $services = services::findOrfail($id);
            $services->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
