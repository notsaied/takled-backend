<?php

namespace App\Http\Controllers\Api;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Mail\SendMailToAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{



    public function store() {
        $data = Validator::make(request()->all(), [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',

        ]);
        if($data->fails()) {
            return response()->json(["status" => false, "message" => $data->errors()->first()]);
        }

        $contact = ContactUs::create($data->validated());

        Mail::to(env("CONTACT_US_EMAIL"))->send(new SendMailToAdmin($contact));

        return response()->json([
            "status" => true,
            "message" => "Message sent successfully"
        ]);

    }
}
