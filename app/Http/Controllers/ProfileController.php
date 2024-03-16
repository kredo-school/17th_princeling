<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function show() {
        $user = auth()->user();
        $timelineData = [
            'labels' => ['Label 1', 'Label 2', 'Label 3'],
            'data' => [100, 200, 300],
        ];
        return view('profile.show', compact('user', 'timelineData'));
    }

    public function edit() {
        return view('profile.edit');
    }


    public function reset() {
        return view('profile.resetpassword');
    }
      
    public function digit() {
        return view('profile.digitcode');
    }
}
