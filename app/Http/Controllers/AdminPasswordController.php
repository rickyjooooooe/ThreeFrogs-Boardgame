<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminPasswordController extends Controller
{
    // Menampilkan form pengisian password baru
    public function showSetPasswordForm()
    {
        return view('setpassword');
    }

    // Menyimpan password baru setelah di-hash
    public function storePassword(Request $request)
    {
        // Validasi input password
        $request->validate([
            'password' => 'required|min:8',
        ]);

        // Cek jumlah password yang ada di database
        $passwordCount = DB::table('admins')->count();

        if ($passwordCount > 0) {
            return back()->with('error', 'Password sudah ada! Anda tidak bisa mengubahnya.');
        }

        // Hash password baru
        $hashedPassword = Hash::make($request->password);

        // Simpan password ke database
        DB::table('admins')->insert([
            'password' => $hashedPassword,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        session()->flush();

        return redirect()->route('admin.setpassword')->with('success', 'Password berhasil disimpan!');
    }
}
