<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function firstPage() {
        return view('firstpage');
    }
    
    public function aboutUs() {
        return view('aboutus');
    }

    public function contact() {
        return view('contact');
    }
}
