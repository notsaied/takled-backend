<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(20);

        return view('admin.posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required",
            "description" => "required",
            "date" => "nullable",
            "address" => "nullable",
            "author" => "nullable",
            "images" => "nullable|array",
            "images.*" => "image"
        ]);


        $post = Post::create([
            "title" => $data["title"] ?? "",
            "description" => $data["description"] ?? "",
            "date" => $data["date"] ?? "",
            "address" => $data["address"] ?? "",
            "author" => $data["author"] ?? ""
        ]);


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $randomFilename = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs("posts", $randomFilename, "public");
                $post->images()->create([
                    "path" => $imagePath
                ]);
            }
        }


        return redirect()->route("admin.posts.index")->with("success", "تم الاضافة بنجاح");
    }

    public function update(Request $request, Post $post) {

        $data = $request->validate([
            "title" => "required",
            "description" => "required",
            "date" => "nullable",
            "address" => "nullable",
            "author" => "nullable",
            "images" => "nullable|array",
            "images.*" => "image"
        ]);

        $post->update([
            "title" => $data["title"] ?? "",
            "description" => $data["description"] ?? "",
            "date" => $data["date"] ?? "",
            "address" => $data["address"] ?? "",
            "author" => $data["author"] ?? ""
        ]);


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $randomFilename = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs("posts", $randomFilename, "public");
                $post->images()->create([
                    "path" => $imagePath
                ]);
            }
        }


        return redirect()->route("admin.posts.index")->with("success", "تم التعديل بنجاح");
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route("admin.posts.index")->with("success", "تم الحذف بنجاح");
    }


    public function postImages(Post $post) {

        return view('admin.posts.images', compact( 'post'));
    }


    public function destroyImage($id) {
        $image = Image::find($id);
        $image->delete();
        return back()->with("success", "تم الحذف بنجاح");
    }
}
