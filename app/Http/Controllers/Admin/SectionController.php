<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    public function index(){
        $sections = Section::get();
        return view('admin.sections.index', compact('sections'));
    }
}
