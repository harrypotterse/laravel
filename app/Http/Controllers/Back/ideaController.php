<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\idea;
use Illuminate\Http\Request;
use Validator;

class ideaController extends Controller
{
    private $Path_pictures = "/";
    public $db = "الافكار ";
    public $route = "idea";
    public $route_up = "idea";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $idea = idea::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://image.flaticon.com/icons/svg/900/900515.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "العنوان";
        $Columns[] = "العنوان الفرعي";
        $Columns[] = "الموضوع";
        $Columns[] = "اللغة";
        return view('Back.Tables.idea.Presentation', compact('idea', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.idea.addition');

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
            'Sub' => 'required',
            'Subject' => 'required',
            'Language' => 'required',
        ], [
            'Language.required' => 'من فضلك ادخل اللغة',
            'Title.required' => 'من فضلك ادخل العنوان',
            'Sub.required' => ' من فضلك ادخل العنوان الفرعي',
            'Subject.required' => 'من فضلك ادخل الموضوع',

        ]);
        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $idea = new idea();
        $idea->Title = $request->input('Title');
        $idea->Sub = $request->input('Sub');
        $idea->Subject = $request->input('Subject');
        $idea->Language = $request->input('Language');
        $idea->save();
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
        $idea = idea::findOrFail($id);
        return view('Back.Tables.idea.Modification')->with(compact('idea', 'path'));
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
        $idea = idea::findOrFail($id);
        return view('Back.Tables.idea.Modification')->with(compact('idea', 'path'));
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
            'Sub' => 'required',
            'Subject' => 'required',
        ], [
            'Title.required' => 'من فضلك ادخل العنوان',
            'Sub.required' => ' من فضلك ادخل العنوان الفرعي',
            'Subject.required' => 'من فضلك ادخل الموضوع',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $idea = idea::findOrfail($id);
        $idea->Title = $request->input('Title');
        $idea->Sub = $request->input('Sub');
        $idea->Subject = $request->input('Subject');
        $idea->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idea = idea::findOrfail($id);
        $idea->destroy($id);
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
