<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HodController extends Controller
{
    public function dashboard()
{
    return view('hod.home');
}
}
