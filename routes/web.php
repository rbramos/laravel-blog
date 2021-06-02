<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function ()
{

    return view('index',
    [
        'posts' => Post::latest()->with('category','user')->get()
    ]);

});

Route::get('/posts/{post:slug}', function (Post $post)
{
    return view('post',
    [
        'post' => $post
    ]);

});

Route::get('/categories/{category:slug}', function (Category $category)
{
    return view('index',
    [
        'posts' => $category->posts
    ]);

});

Route::get('/user/{user:username}', function (User $user)
{
    return view('index',
    [
        'posts' => $user->posts
    ]);

});

