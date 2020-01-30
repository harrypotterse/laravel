<?php

namespace App\Http\Controllers;

use Session;
use App\idea;
use App\banner;
use App\services;
use App\customers;
use App\portfolio;

class tabel_data extends Controller
{

    public function banner()
    {
        if (Session::get('locale') == "en") {
            $banner = banner::take(9)->orderBy('id', 'ASC')->where('Language', 'English')->get();

        } else {
            $banner = banner::take(9)->orderBy('id', 'ASC')->where('Language', 'Arabic')->get();
        }
        return $banner;

    }
    public function customers()
    {
        if (Session::get('locale') == "en") {
            $customers = customers::take(5)->orderBy('id', 'DESC')->where('Language', 'English')->get();

        } else {
            $customers = customers::take(5)->orderBy('id', 'DESC')->where('Language', 'Arabic')->get();
        }
        return $customers;

    }
    public function services()
    {
        if (Session::get('locale') == "en") {
            $customers = services::take(9)->orderBy('id', 'DESC')->where('Language', 'English')->get();

        } else {
            $customers = services::take(9)->orderBy('id', 'DESC')->where('Language', 'Arabic')->get();
        }
        return $customers;
    }
    public function idea()
    {
        if (Session::get('locale') == "en") {

            $idea = idea::take(5)->orderBy('id', 'DESC')->where('Language', 'English')->get();

        } else {
            $idea = idea::take(5)->orderBy('id', 'DESC')->where('Language', 'Arabic')->get();
        }
        return $idea;

    }

    public function portfolio()
    {
        if (Session::get('locale') == "en") {
            $portfolio = portfolio::take(12)->orderBy('id', 'DESC')->where('Language', 'English')->get();

        } else {
            $portfolio = portfolio::take(12)->orderBy('id', 'DESC')->where('Language', 'Arabic')->get();
        }
        return $portfolio;
    }

}
