<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\planning;
use Illuminate\Http\Request;
use Validator;

class planningController extends Controller
{
    private $Path_pictures = "https://image.flaticon.com/icons/svg/1006/1006585.svg";
    public $db = "التخطيط";
    public $route = "planning";
    public $route_up = "planning";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $planning = planning::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://image.flaticon.com/icons/svg/342/342365.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "العنوان";
        $Columns[] = "الموضوع";
        $Columns[] = "اللغة";
        return view('Back.Tables.planning.Presentation', compact('planning', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.planning.addition');

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
            'Subject' => 'required',
            'Language' => 'required',
        ], [
            'Title.required' => 'من فضلك ادخل العنوان',
            'Subject.required' => ' من فضلك ادخل الموضوع',
            'Language.required' => 'من فضلك ادخل اللغة',
        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $data = request()->except(['Language']);
        $data['Language']="ALL";
        planning::create($data);
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
        $planning = planning::findOrFail($id);
        return view('Back.Tables.planning.Modification')->with(compact('planning', 'path'));
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
        $planning = planning::findOrFail($id);
        return view('Back.Tables.planning.Modification')->with(compact('planning', 'path'));
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
            'Subject' => 'required',
        ], [
            'Title.required' => 'من فضلك ادخل العنوان',
            'Subject.required' => ' من فضلك ادخل الموضوع',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $planning = planning::findOrfail($id);
        $planning->Title = $request->input('Title');
        $planning->Subject = $request->input('Subject');
        $planning->save();
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
        $planning = planning::findOrfail($id);
        $planning->destroy($id);
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);

    }
}
