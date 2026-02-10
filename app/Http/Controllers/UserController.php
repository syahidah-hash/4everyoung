<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
        $title = "Daftar User & Simpanan";
        $users = User::with('savings') ->get();
        return view('users.index', compact('users', 'title'));
    }
}
