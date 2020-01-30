<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\steps;
use Illuminate\Http\Request;
use Validator;

class stepsController extends Controller
{
    private $Path_pictures = "/";
    public $db = "الخطوات";
    public $route = "steps";
    public $route_up = "steps";
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $steps = steps::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://image.flaticon.com/icons/svg/2208/2208931.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = route('steps.create');
        $Columns = array();
        $Columns[] = "العنوان";
        $Columns[] = "الشرح";
        $Columns[] = "اللغة";
        return view('Back.Tables.steps.Presentation', compact('steps', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Back.Tables.steps.addition');

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
        $services = steps::findOrFail($id);
        return view('Back.Tables.steps.Modification')->with(compact('steps', 'path'));
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
        $steps = steps::findOrFail($id);
        return view('Back.Tables.steps.Modification')->with(compact('steps', 'path'));
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
            'Explanation' => 'required',
        ], [
            'Title.required' => ' من فضلك ادخل حق العنوان',
            'Explanation.required' => ' من فضلك قم بأدخال حقل الشرح',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $steps = steps::findOrfail($id);
        $steps->Title = $request->input('Title');
        $steps->Explanation = $request->input('Explanation');
        $steps->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
