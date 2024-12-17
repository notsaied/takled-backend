<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
    public function index(){
        $sections = Section::latest()->paginate(20);
        return view('admin.sections.index', compact('sections'));
    }


    public function update(Request $request, Section $section)
    {
        $data = $request->validate([
            "title"       => "required",
            "description" => "required",
            "image"       => "nullable|image",
        ]);


        $section->update([
            "title"       => $data["title"],
            "description" => $data["description"],
        ]);




        if ($request->hasFile("image")) {
            $existingImage = $section->images->first();

            if ($existingImage && $existingImage->path != null) {
                Storage::disk('public')->delete($existingImage->path);
            }

            $randomFilename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file("image")->storeAs("sections", $randomFilename, "public");

            $section->images()->updateOrCreate([], [
                'path' => $imagePath,
            ]);
        }


        return to_route("admin.sections.index")->with("success", "تم تحديث القسم بنجاح");
    }
}
