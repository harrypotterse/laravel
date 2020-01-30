<?php

namespace App\Http\Controllers\front;

use App\blog;
use App\blog_categories;
use App\contact;
use App\Http\Controllers\Controller;
use App\Notifications\InvoicePaid;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Notification;
use Session;

class blog_controler extends Controller
{
    /*
    |-------------------------------------------------------
    | عرض بيانات الاقسام
     */
    public function show_blog($id = null)
    {

        visits("المدونة");
        if (Session::get('locale') == "en") {
            $blog_categories = blog_categories::take(5)->orderBy('id', 'DESC')->where('Language', 'English')->get();
            $blog = blog::orderBy('id', 'DESC')->where('Language', 'English')->paginate(30);
        } else {
            $blog_categories = blog_categories::take(5)->orderBy('id', 'DESC')->where('Language', 'Arabic')->get();
            $blog = blog::orderBy('id', 'DESC')->where('Language', 'Arabic')->paginate(30);
        }

        return view('front.blog')->with(compact('blog', 'blog_categories'));
    }
    /*
    |-------------------------------------------------------
    | اظهار البيانات لأقسام المدونة
     */
    public function blog_categories($id)
    {
        if (Session::get('locale') == "en") {
            $blog_categories = blog_categories::take(5)->orderBy('id', 'DESC')->where('Language', 'English')->get();
        } else {
            $blog_categories = blog_categories::take(5)->orderBy('id', 'DESC')->where('Language', 'Arabic')->get();
        }

        $blog = blog::orderBy('id', 'DESC')->where('Section', $id)->paginate(30);
        return view('front.blog')->with(compact('blog', 'blog_categories'));
    }
    /*
    |-------------------------------------------------------
    | fotter;
     */
    public function contact(Request $request)
    {
        //  $user = \Auth::user();
        $this->validate($request, [
            'Name' => 'required',
            'Email' => 'required|email',
            'message' => 'required',
        ], [
            'Name.required' => ' من فضلك ادخل اسم المستخدم',
            'Email.required' => ' من فضلك ادخل البريد الالكتروني',
            'message.required' => ' The data field is required',
        ]);
        // Store the blog post...
        $contact = new contact();
        $contact->Name = $request->input('Name');
        $contact->Email = $request->input('Email');
        $contact->message = $request->input('message');
        $contact->save();
        //ارسال الاشعار الي مستخدم لوحة التحكم
        if ($contact->save()) {
            
            $user = User::get();
            Notification::send($user, new InvoicePaid($contact));
            //تجهيز البيانات لأرسلها الي نموذج بيانات البريد الالكتروني
            $data = array('name' => $request->input('Name'),
                'Email' => $request->input('Email'),
                'data_msg' => $request->input('message'),
            );
            //ارسال رسالة بالبريد الالكتروني
            Mail::send('Mail.Mail', $data, function ($message) {
                $message->to('abc@gmail.com', 'Tutorials Point')->subject
                    ('Laravel HTML Testing Mail');
                $message->from('xyz@gmail.com', 'Virat Gandhi');
            });
        }
        if (Session::get('locale') == "en") {
            return redirect()->back()->with('alert-success', 'The data was saved successfully');
        } else {
            return redirect()->back()->with('alert-success', 'تم ارسال الرسالة بنجاح');



            
        }
    }

}
