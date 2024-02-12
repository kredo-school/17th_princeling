<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show() {
        return view('profile.show');
    }

    public function edit() {
        return view('profile.edit');
    }

    public function digit() {
        return view('profile.digitcode');
    }
}
