<?php

namespace App\Http\Controllers\Admin;

use App\Models\Barber;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarberController extends Controller
{
    public function index()
    {
        $barbers = Barber::latest()->paginate(20);
        return view("admin.barbers.index", compact("barbers"));
    }


    public function create(){
        $services = Service::all();
        return view("admin.barbers.create", compact("services"));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            "name" => "required",
            "image" => "nullable|image",
            "telegram_id"=>"nullable",
            "services" => "required|array"
        ]);



        if ($request->hasFile('image')) {
            $randomFilename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->storeAs('barbers', $randomFilename, 'public');

            $data['image'] = $randomFilename;
        }

        $barber = Barber::create([
            "name" => $data['name'],
            "telegram_id" => $data['telegram_id'] ,
            "image" => $data['image'] ?? ""
        ]);


        $barber->services()->attach($data['services']);

        return redirect()->route("admin.barbers.index")->with("success", "Barber created successfully");
    }


    public function edit(Barber $barber){


        $services = Service::all();
        $selectedServices = $barber->services->pluck('id')->toArray();

        return view("admin.barbers.edit", compact("barber", "services", "selectedServices"));
    }

    public function update(Request $request, Barber $barber){


        $data = $request->validate([
            "name" => "required",
            "image" => "nullable|image",
            "telegram_id"=>"nullable",
            "services" => "required|array"
        ]);


        if ($request->hasFile('image')) {
            $randomFilename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->storeAs('barbers', $randomFilename, 'public');

            $data['image'] = $randomFilename;
        }



        $barber->update([
            "name" => $data['name'],
            "telegram_id" => $data['telegram_id'] ,
            "image" => $data['image'] ?? $barber->image
        ]);

        $barber->services()->sync($data['services']);


        return redirect()->route("admin.barbers.index")->with("success", "Barber updated successfully");

    }


    public function destroy(Barber $barber){

        $barber->delete();
        return response()->json(["message" => "Barber deleted successfully"]);
    }
}
