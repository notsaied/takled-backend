<?php

namespace App\Http\Controllers\Admin;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index()
    {
        $config = Config::first();
        // dd($config);
        return view('admin.config.index', compact('config'));
    }


    public function update(Request $request)
    {
        $data = $request->validate([
            "facebook" => "nullable",
            "email" => "nullable",
            "phone_number" => "nullable",
            "instagram" => "nullable",
            "address" => "nullable",
            "hours" => "nullable",
        ]);

        $config = Config::first();
        
        if ($config) {
            $config->update($data);
        } else {
            Config::create($data);
        }
        return redirect()->route("admin.configs.index")->with("success", "Configration updated successfully");
    }
}
