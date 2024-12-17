<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {

        $services = Service::latest()->paginate(20);
        return view("admin.services.index", compact("services"));
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "price" => "required",
            "duration" => "required"
        ]);

        Service::create($data);

        return redirect()->route("admin.services.index")->with("success", "Service created successfully");
    }


    public function update(Request $request, Service $service){
        $data = $request->validate([
            "name" => "required",
            "price" => "required",
            "duration" => "required",
        ]);

        $service->update($data);

        return redirect()->route("admin.services.index")->with("success", "Service updated successfully");

    }


    public function destroy(Service $service){

        $service->delete();
        return response()->json(["message" => "Barber deleted successfully"]);
    }
}
