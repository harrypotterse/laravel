<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class dashboard extends Controller
{
    public function index()
    {
        return View('Back.tabel');
    }
    public function tabel()
    {
        return View('Back.tabel');
    }
    public function add()
    {
        return View('Back.add');

    }
}
