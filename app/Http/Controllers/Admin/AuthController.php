<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin() {
        return view('admin.login.index');
    }
    public function login(Request $request) {

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('admins')->attempt($credentials)) {
            // Authentication passed, redirect or respond accordingly
            return redirect()->route('admin.posts.index'); // Replace 'dashboard' with your intended route
        } else {
            // Authentication failed, redirect back with an error message
            return redirect()->back()
                ->withInput()
                ->with('error', 'Invalid credentials, please try again.');
        }
    }


    public function logout() {
        Auth::guard('admins')->logout();
        return redirect()->to('/');
    }
}
