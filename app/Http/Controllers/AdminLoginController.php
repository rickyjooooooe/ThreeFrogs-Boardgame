<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('adminlogin');  // The view you created for the login
    }

    // Handle login request (AJAX)
    public function login(Request $request)
    {
        // Get the stored password from the admins table
        $admin = DB::table('admins')->first();

        // If the table is empty, we need to create a new password
        if (!$admin) {
            return response()->json([
                'success' => false,
                'message' => 'No password set. Please contact the administrator.',
            ]);
        }

        // If the table is not empty, compare the input password with the stored password
        if (Hash::check($request->password, $admin->password)) {
            // Password is correct, log the user in (store in session)
            session(['is_admin' => true]);

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Login successful.',
            ]);
        }

        // If password is incorrect, return error response
        return response()->json([
            'success' => false,
            'message' => 'Invalid password.',
        ]);
    }
}
