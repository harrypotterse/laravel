<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\sections_pro;
use Illuminate\Http\Request;
use Validator;

class sections_proController extends Controller
{
    private $Path_pictures = "/";
    public $db = "اقسام المشاريع";
    public $route = "sections_pro";
    public $route_up = "sections_pro";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sections_pro = sections_pro::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = " https://www.flaticon.com/premium-icon/icons/svg/2131/2131930.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "القسم";
        $Columns[] = "اللغة";
        return view('Back.Tables.sections_pro.Presentation', compact('sections_pro', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.sections_pro.addition');

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
            'sections' => 'required',
            'Language' => 'required',
        ], [
            'sections.required' => 'من فضك قم بأختيار القسم',
            'Language.required' => ' من فضلك قم بأختيار الصورة',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $sections_pro = new sections_pro();
        $sections_pro->sections = $request->input('sections');
        $sections_pro->Language = $request->input('Language');
        $sections_pro->save();
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
        $services = sections_pro::findOrFail($id);
        return view('Back.Tables.sections_pro.Modification')->with(compact('sections_pro', 'path'));
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
        $sections_pro = sections_pro::findOrFail($id);
        return view('Back.Tables.sections_pro.Modification')->with(compact('sections_pro', 'path'));
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
            'sections' => 'required',
            'Language' => 'required',
        ], [
            'sections.required' => ' من فضلك قم بأختيار القسم',
            'Language.required' => ' من فضلك قم بأختيار اللغة',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $sections_pro = sections_pro::findOrfail($id);
        $sections_pro->sections = $request->input('sections');
        $sections_pro->Language = $request->input('Language');
        $sections_pro->save();
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
        $sections_pro = sections_pro::findOrfail($id);
        $sections_pro->destroy($id);
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
