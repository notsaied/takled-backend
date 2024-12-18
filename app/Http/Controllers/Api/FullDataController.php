<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FullDataController extends Controller
{
    public function index()
    {
        $sections = Section::get();
        $posts = Post::latest()->with('images')->get()->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                "date" => $post->date,
                "address" => $post->address,
                'description' => $post->description,
                'images' => $post->all_images(),
            ];
        });

        return response()->json([
            'sections' => $sections,
            'posts' => $posts
        ]);
    }

}
