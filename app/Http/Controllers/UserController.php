<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // Menampilkan semua user
    public function index()
    {
        $title = "Daftar User";
        $users = User::all();
        return view('users.index', compact('users', 'title'));
    }
}
