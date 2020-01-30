<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\social;
use Illuminate\Http\Request;
use Validator;

class socialController extends Controller
{
    private $Path_pictures = "";
    public $db = "التواصل الاجتماعي";
    public $route = "social";
    public $route_up = "social";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $social = social::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://www.flaticon.com/premium-icon/icons/svg/2247/2247791.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Columns = array();
        $Columns[] = "الاسم";
        $Columns[] = "الرابط";
        return view('Back.Tables.social.Presentation', compact('social', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.social.addition');

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
            'name' => 'required',
            'link' => 'required',
            'Image' => 'required',
        ], [
            'name.required' => ' The data field is required',
            'link.required' => ' The data field is required',
            'Image.required' => ' The data field is required',

        ]);

        if ($validator->fails()) {
            return redirect()->route($this->route . ".create")
                ->withErrors($validator)
                ->withInput();
        }
        $social = new social();
        $social->name = $request->input('name');
        $social->link = $request->input('link');
        $social->Image = $request->input('Image');
        $social->save();
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
        $services = social::findOrFail($id);
        return view('Back.Tables.social.Modification')->with(compact('social', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

            /*     $this->validate($request, [
            'User' => 'required|min:3|max:50|unique:users,name',
            'password' => 'required_with:Reset|min:6|same:Reset',
            'Reset' => 'required',
            'Mail' => 'required|email|unique:users,email',
            'profile' => '',

        ], [
            'User.required' => ' The Name field is required',
            'User.unique' => ' User already exists',
            'password.required' => ' The password field is required',
            'Reset.required' => ' The password reset field is required',
            'Mail.required' => ' Email field is required',
            'Mail.unique' => ' Mail already exists',
            'Mail.required' => ' Email field is required',
            'Mail.email' => ' Mail is wrong',
            'profile.required' => 'required',
            'profile.mimes' => 'mimes',
            'profile.max' => 'max',
        ]); */
        $path = $this->Path_pictures;
        $social = social::findOrFail($id);
        return view('Back.Tables.social.Modification')->with(compact('social', 'path'));
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
            'link' => 'required|url',
        ], [
            'link.required' => 'من فضلك ادخل الرابط',
            'link.url' => 'الرابط غير صحيح',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $social = social::findOrfail($id);
        $social->link = $request->input('link');
        $social->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
