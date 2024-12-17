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
        $sections = Section::paginate(20);
        return view('admin.sections.index', compact('sections'));
    }


    public function update(Request $request, Section $section)
    {
        // التحقق من البيانات
        $data = $request->validate([
            "title"       => "required",
            "description" => "required",
            "image"       => "nullable|image",
        ]);


        // تحديث البيانات النصية
        $section->update([
            "title"       => $data["title"],
            "description" => $data["description"],
        ]);




        if ($request->hasFile("image")) {
            if ($section->images) {
                Storage::disk('public')->delete($section->images->first()->path);
            }
            $randomFilename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file("image")->storeAs("sections",$randomFilename, "public");

            $section->images()->updateOrCreate([], [
                'path' => $imagePath,
            ]);
        }

        return to_route("admin.sections.index")->with("success", "تم تحديث القسم بنجاح");
    }
}
