<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function upmeal(){
        return view('user.upmeal');
    }
}
