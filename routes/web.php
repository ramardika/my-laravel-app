<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'posts'=> Post::all()]);
});

Route::get('/about', function () {
    return view('about', ['name'=>'Ramadhan Ardi K.','title' => 'About']);
});

Route::get('/posts/{post:slug}', function( Post $post) {

        // $post = Post::find($slug);

        return view('post',['title'=> 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function(User $user) {

    // $post = Post::find($slug);

    return view('posts',['title'=> 'Articles by ' .$user->name, 'posts' => $user->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
