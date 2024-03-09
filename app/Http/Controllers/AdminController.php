<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\
     */
    public function dashboard()
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }
    
}
