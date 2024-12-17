<?php

namespace App\Http\Controllers\Api;

 
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $data = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            "phone" => "required",
            'message' => 'required',
        ]);


        if ($data->fails()) {
            return response()->json(["status" => false, "errors" => $data->errors()], 422);
        }

        $feedback = Feedback::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message
        ]);

        return response()->json(["status" => true, "message" => "Feedback submitted successfully"]);
    }
}
