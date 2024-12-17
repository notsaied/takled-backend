<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    public function index(){
        $sections = Section::paginate(20);
        return view('admin.sections.index', compact('sections'));
    }


    public function update(Request $request, Section $section){
        $data = $request->validate([
            "name" => "required",
        ]);

        $section->update($data);
        return to_route("admin.sections.index")->with("success", "تم تحديث القسم بنجاح");
    }
}
