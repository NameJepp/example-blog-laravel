<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
    'post' => $post
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
    'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
    'category' => $category,
    'posts' => $category->posts
    ]);
});
Route::get('/authors', function () {
    return view('authors', [
    'users' => User::all()
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('author', [
    'author' => $author,
    'posts' => $author->posts
    ]);
});
