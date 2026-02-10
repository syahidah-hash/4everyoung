<?php

namespace App\Http\Controllers;

use App\Models\Saving;
use App\Models\User;
use Illuminate\Http\Request;

class SavingController extends Controller
{
    public function index()
    {
        $savings = Saving::with('user')->get();
        return view('savings.index', compact('savings'));
    }
    // Simpan data saving
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'saving_type' => 'required|in:principal,mandatory,voluntary',
            'amount' => 'required|numeric|min:0',
        ]);

        Saving::create([
            'user_id' => $request->user_id,
            'saving_type' => $request->saving_type,
            'amount' => $request->amount,
        ]);

        return redirect()->back()->with('success', 'Simpanan berhasil ditambahkan');
    }
}
