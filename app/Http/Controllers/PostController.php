<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy("id", "desc")
        ->paginate(10);
    
        return view("posts.index", compact("posts"));
    }

    public function create() {
        return view("posts.create");
    }

    public function store(Request $request) {
        // $post = new Post();
        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content= $request->content;
        // $post->category = $request->category;
        // $post->save();

        $request->validate([
            "title"=> "required",
            "content"=> "required",
            "slug" => "required|unique:posts",
            "category" => "required",
        ]);

        $post = Post::create($request->all());

        $qr_code = QrCode::create(route('posts.show', $post));

        $writer = new PngWriter();

        $result = $writer->write($qr_code);

        $post->img = $result->getDataUri();

        Mail::to('test@test.com')->send(new PostCreateMail($post));

        return redirect()->route('posts.index');
    }

    public function show(Post $post){
        // $post = Post::find($post);

        $qr_code = QrCode::create(route('posts.show', $post))->setSize(150);

        $writer = new PngWriter();

        $result = $writer->write($qr_code);

        $post->img = $result->getDataUri();

        return view("posts.show", ["post"=> $post]);
    }

    public function edit(Post $post){
        // $post = Post::find($post);

        return view("posts.edit", ["post"=> $post]);
    }

    public function update(Request $request, Post $post){
        // $post = Post::find($post);

        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content= $request->content;
        // $post->category = $request->category;
    
        //$post->save();

        $post->update($request->all());

        return redirect()->route("posts.show", $post);
    }

    public function destroy(Post $post){
        // $post = Post::find($post);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
