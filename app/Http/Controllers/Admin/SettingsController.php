<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){

        return view('admin.settings.index');
    }

    public function update(Request $request){
        $user = auth()->user();
        $data = $request->validate([
            "name" => "required",
            "username" => "required|unique:admins,username,".$user->id,
            "password"=> "nullable|min:6"
        ]);

        if(!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }

        $user->update($data);

        return back()->with('success', 'Profile updated successfully');


    }
}
