<?php

namespace App\Http\Controllers\back;

use App\contactho;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function login()
    {
        return view('Back.Tables.Home.login');
    }
    public function login_user(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => ' Please enter your email address',
            'password.required' => 'Please enter your password',
            'email.email' => ' Invalid email',
        ]);
        $data = $request->all();
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return redirect(route('index.show'));
        } else {
            return redirect()->back()->with('alert-success', 'Wrong password');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('Show.customers');
    }
    public function showindex()
    {

        return view('Back.Tables.Home.index');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contactho  $contactho
     * @return \Illuminate\Http\Response
     */
    public function show(contactho $contactho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contactho  $contactho
     * @return \Illuminate\Http\Response
     */
    public function edit(contactho $contactho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contactho  $contactho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactho $contactho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contactho  $contactho
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactho $contactho)
    {
        //
    }

    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $githubUser = Socialite::driver('github')->user();
        $user = User::where('provider_id', $githubUser->getId())->first();
        if (!$user) {
            // add user to database
            $user = User::create([
                'email' => $githubUser->getEmail(),
                'name' => $githubUser->getName(),
                'provider_id' => $githubUser->getId(),
            ]);
        }
        // login the user
        Auth::login($user, true);
        return redirect(route('index.show'));
    }

    
}
