<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutus()
    {
        return view('aboutus');
    }
    public function ourteachers()
    {
        return view('ourteachers');
    }
    public function ourcourses()
    {
        return view('ourcourses');
    }
}
