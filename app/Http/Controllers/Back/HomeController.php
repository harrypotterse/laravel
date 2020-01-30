<?php

namespace App\Http\Controllers\back;

use App\contactho;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    public function login()
    {
        return view('Back.Tables.Home.login');
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
}
