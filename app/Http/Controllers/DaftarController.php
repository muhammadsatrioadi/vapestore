<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required|min:8',
        ]);

        // Simpan data ke database
        DB::table('pengguna')->insert([
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        return response()->json(['success' => true, 'message' => 'Pendaftaran berhasil!']);
    }
}
