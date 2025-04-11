<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;

Route::get('/', function () {
    $post = Post::with(['author', 'tags'])->get();
    $featuredPosts = Post::with(['author', 'tags'])->where('featured', true)->limit(4) ->get();
    $authors = User::take(3)->get();
    
    return view('welcome', ['posts' => $post, 'authors' => $authors, 'featuredPosts' => $featuredPosts]);
});

Route::get('/authors',[AuthorController::class, 'index']);
Route::get('/author/{slug}',[AuthorController::class, 'show']);
