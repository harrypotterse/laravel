<?php

namespace App\Http\Controllers\back;

use App\brands;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class brandsController extends Controller
{
    private $Path_pictures = "/Front/images/clients/";
    public $db = " brands";
    public $route = "brands";
    public $route_up = "brands";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = brands::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://image.flaticon.com/icons/svg/2208/2208931.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الصورة";
        return view('Back.Tables.brands.Presentation', compact('brands', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.brands.addition');

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
            'Image.required' => ' حقل الصور مطلوب',

        ]);
        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $brands = new brands();
        $brands->pic = Upload($request, 400, 300, $this->Path_pictures);
        $brands->save();
        return redirect()->back()->with('alert-success', 'تمت اضافة موضوع جديد');
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
        $services = brands::findOrFail($id);
        return view('Back.Tables.brands.Modification')->with(compact('brands', 'path'));
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
        $brands = brands::findOrFail($id);
        return view('Back.Tables.brands.Modification')->with(compact('brands', 'path'));
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
            'old.required' => 'حقل الصورة مطلوب',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $brands = brands::findOrfail($id);
        $brands->pic =Upload_($request, 400, 300, $this->Path_pictures);;
        $brands->save();
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
            $brands = brands::findOrfail($id);
            $brands->destroy($id);
            return response()->json([
                'success' => 'Record deleted successfully!',
            ]);
        }
   
    }
}
