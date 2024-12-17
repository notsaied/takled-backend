<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function index(){
        $feedbacks = Feedback::paginate(20);
        return view('admin.feedbacks.index', compact('feedbacks'));
    }


    public function destroy(Feedback $feedback){
        $feedback->delete();
        return response()->json(["status" => true, "message" => "Feedback deleted successfully"]);
    }

}
