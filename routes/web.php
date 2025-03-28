<?php

use App\Http\Controllers\ReserveController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;

Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('adminlogin');
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('adminlogin');


Route::get('/admin', [AdminController::class, 'index'])->name('adminindex');

Route::get('/', [ReserveController::class, 'showForm'])->name('index');
Route::post('/reservations', [ReserveController::class, 'store'])->name('reservations.store');

Route::put('/reservations/{id}', [ReserveController::class, 'update'])->name('reservations.update');

// Delete route for reservation
Route::delete('/reservations/{id}', [AdminController::class, 'destroy'])->name('reservations.destroy');


Route::delete('/admin/reservations/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::delete('/admin/deleted-reservations/{id}', [AdminController::class, 'deleteLog'])->name('admin.deleteLog');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

Route::get('/admin/login', function () {
    $admin = DB::table('admins')->first();

    // Jika tidak ada password di database, hanya tampilkan pesan
    if (!$admin) {
        return view('adminlogin', ['no_password' => true]);
    }

    return view('adminlogin', ['no_password' => false]);
})->name('adminlogin');

Route::post('/admin/login', function (Request $request) {
    $request->validate([
        'password' => 'required'
    ]);

    $admin = DB::table('admins')->first();

    // Jika tidak ada password di database, tidak boleh login
    if (!$admin) {
        return back()->with('error', 'No password set.');
    }

    if (!Hash::check($request->password, $admin->password)) {
        return back()->with('error', 'Invalid password');
    }

    // Simpan sesi admin
    Session::put('is_admin', true);
    return redirect()->route('adminindex');
});

// Logout Admin
Route::post('/admin/logout', function () {
    Session::forget('is_admin');
    return redirect()->route('adminlogin');
})->name('admin.logout');

Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('adminindex');

use App\Http\Controllers\AdminPasswordController;

Route::get('/admin/set-password', [AdminPasswordController::class, 'showSetPasswordForm'])->name('admin.setpassword');
Route::post('/admin/set-password', [AdminPasswordController::class, 'storePassword'])->name('admin.storepassword');





