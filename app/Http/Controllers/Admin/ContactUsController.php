<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index(){
        $allContactUs = ContactUs::latest()->paginate(20);
        return view('admin.contact-us.index', compact('allContactUs'));
    }

    public function update(Request $request, ContactUs $contactUs){
        // dd($request->all());
        $data = $request->validate([
            "follow_up" => "nullable",
        ]);

        $contactUs->update($data);

        return redirect()->route('admin.contact-us.index')->with('success', 'تم التحديث بنجاح');

    }


    public function destroy(ContactUs $contactUs){
        $contactUs->delete();
        return redirect()->route('admin.contact-us.index')->with('success', 'تم الحذف بنجاح');
    }
}
