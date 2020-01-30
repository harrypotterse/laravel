<?php

namespace App\Http\Controllers\back;

use App\customers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;
use Image;
use Intervention\Image\Exception\NotReadableException;
class maincontrol extends Controller
{
    private $Path_pictures = "/Front/images/avatar/";
    public $db="اراء العملاء";
    public function showcustomers()
    {
        $customers = customers::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = "https://image.flaticon.com/icons/svg/2208/2208931.svg";
        $Settings[] = $this->Path_pictures;
        $Settings[] = "100";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "الاسم";
        $Columns[] = "الكلمة";
        $Columns[] = "اللغة";
        $Columns[] = "Facebook";
        return view('Back.Tables.customers.Presentation', compact('customers', 'Settings', 'Columns'));
    }
    public function customers_del($id, $img)
    {
        if (DelFilePath($this->Path_pictures, $img) == true) {
            $customers = customers::findOrfail($id);
            $customers->destroy($id);
        }
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
    public function add_customers()
    {
        return view('Back.Tables.customers.addition');
    }
    public function save_customers(Request $request)
    {
        try {
            $this->validate($request, [
                'Image' => 'required',
                'Name' => 'required',
                'Word' => 'required',
                'Language' => 'required',
                'Facebook' => 'required',
            ], [
                'Image.required' => 'من فضلك قم بتحميل الصورة',
                'Name.required' => 'من فضلك قم بكتابة الاسم',
                'Word.required' => ' من فضلك قم بكتابة الكلمة',
                'Language.required' => ' من فضلك قم باختيار اللغة',
                'Facebook.required' => ' من فضلك قم بلصق رابط الفيس بوك',
            ]);
            $customers = new customers();
            $customers->Image = Upload($request, 200, 200, $this->Path_pictures);
            $customers->Name = $request->input('Name');
            $customers->Word = $request->input('Word');
            $customers->Language = $request->input('Language');
            $customers->Facebook = $request->input('Facebook');
            $customers->save();
            latest_additions($this->db);
            return redirect(route('add.customers'))->with('alert-success', 'تمت اضافة موضوع جديد');
        } catch (NotReadableException $exception) {
            abort(500, 'Something went wrong');

        }
    }
    public function customers_up($id)
    {
        $path = $this->Path_pictures;
        $customers = customers::findOrFail($id);
        return view('Back.Tables.customers.Modification')->with(compact('customers', 'path'));
    }
    public function updata_customers(Request $request, $id)
    {
        $this->validate($request, [
            'Name' => 'required',
            'Word' => 'required',
            'Facebook' => 'required',
        ], [
            'Name.required' => 'من فضلك قم بكتابة الاسم',
            'Word.required' => ' من فضلك قم بكتابة الكلمة',
            'Facebook.required' => ' من فضلك قم بلصق رابط الفيس بوك',
        ]);
        $customers = customers::findOrfail($id);
        $customers->Image = Upload_($request, 200, 200, $this->Path_pictures);
        $customers->Name = $request->input('Name');
        $customers->Word = $request->input('Word');
        $customers->Facebook = $request->input('Facebook');
        $customers->save();
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

}
