<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuarioController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('homepage');

// Route::get("/posts", [PostController::class,"index"])->name('posts.index');
// Route::get("/posts/create", [PostController::class,"create"])->name('posts.create');
// Route::post("/posts", [PostController::class,"store"])->name('posts.store');
// Route::get("/posts/{post}", [PostController::class,"show"])->name('posts.show');
// Route::get("/posts/{post}/edit", [PostController::class,"edit"])->name('posts.edit');
// Route::put("/posts/{post}", [PostController::class,"update"])->name('posts.update');
// Route::delete("/posts/{post}", [PostController::class,"destroy"])->name('posts.destroy');

Route::resource('posts', PostController::class);

Route::resource('usuarios', UsuarioController::class);

// Route::get("usuarios", function () {
//     return "usuarios";
// })-> name("usuarios");

Route::get("paquetes", function () {
    return 'paquetes';
})-> name('paquetes');

Route::get('ordenes', function () {
    return 'ordernes';
})->name('ordenes');

Route::get('encomiendas', function () {
    return 'encomiendas';
})->name('encomiendas');

Route::get("prueba", function() {
    // ::::::Create post
    // $post = new Post;

    // $post->title = "post 2";
    // $post->content = "post content 2";
    // $post->category = "post category 3";

    // $post->save();

    // return $post;

    //:::::::Actualizar post
    // $post = Post::find(1); //busqueda id 1;
    // $post = Post::where("title", "post 2")->first(); //busqueda con filtro

    // $post->category = "FrontEnd";

    // $post->save();

    // return $post;

    //::::::get all posts
    // $posts = Post::all();

    // return $posts;

    //:::::::get posts filtered
    // $posts = Post::where("id", '>=', '2')
    // ->orderBy('id','desc')
    // ->select('title')
    // ->take(2)
    // ->get();
    // return $posts;

    //:::::delete post
    // $post = Post::find(1);
    // $post->delete();
    // return "eliminado correctamente";

    $post = Post::find(2); //busqueda id 1;


    // return $post->created_at->format("d-m-Y"); //format date
    return $post->published_at->diffForHumans();
});
