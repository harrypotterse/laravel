<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\portfolio;
use App\sections_pro;
use Illuminate\Http\Request;
use Validator;

class portfolioController extends Controller
{
    private $Path_pictures = "/Front/images/folio/";
    public $db = "اعمالنا ";
    public $route = "portfolio";
    public $route_up = "portfolio";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $portfolio = portfolio::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://image.flaticon.com/icons/svg/906/906175.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "250";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "القسم";
        $Columns[] = "اللغة";
        return view('Back.Tables.portfolio.Presentation', compact('portfolio', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.portfolio.addition');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validator($request);
        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }

        $portfolio = new portfolio();
        $portfolio->Image = Upload($request, 800, 530, $this->Path_pictures);
        $portfolio->Language = $request->input('Language');
        $portfolio->sections_prog = $request->input('sections_prog');
        $portfolio->save();
        return redirect()->back()->with('alert-success', 'The data was saved successfully');

    }
    public function validator($request)
    {
        return Validator::make($request->all(), [
            'Image' => 'required',
            'Language' => 'required',
            'sections_prog' => 'required',
        ], [
            'Image.required' => ' من فضلك قم برفع الصورة ',
            'Language.required' => ' من فضلك قم بأختيار اللغة',
            'sections_prog.required' => ' من فضلك قم بأختيار القسم',

        ]);
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
        $services = portfolio::findOrFail($id);
        return view('Back.Tables.portfolio.Modification')->with(compact('portfolio', 'path'));
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
        $portfolio = portfolio::findOrFail($id);
        return view('Back.Tables.portfolio.Modification')->with(compact('portfolio', 'path'));
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
            'Language' => 'required',
            'sections_prog' => 'required',
        ], [
            'old.required' => ' من فضلك قم برفع الصورة ',
            'Language.required' => ' من فضلك قم بأختيار اللغة',
            'sections_prog.required' => ' من فضلك قم بأختيار القسم',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $portfolio = portfolio::findOrfail($id);
        $portfolio->Image = Upload($request, 200, 200, $this->Path_pictures);
        $portfolio->Language = $request->input('Language');
        $portfolio->sections_prog = $request->input('sections_prog');
        $portfolio->save();
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
            $portfolio = portfolio::findOrfail($id);
            $portfolio->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
    public function lang_ajax($lang)
    {
        $sections_pro = sections_pro::orderBy('id', 'DESC')->where('Language', $lang)->get();
        foreach ($sections_pro as $item) {
            echo "<option value='$item->id'>$item->sections</option>";

        }

    }
}
