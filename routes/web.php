<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', function () {
    $post = Post::create([
        'title' => 'my first post',
        'slug' => 'my-first-post',
        'content' => 'this is a great'
    ]);
    return view('welcome',['post' => $post]);
});

Route::get('/find/{id}', function($id){
    $post = Post::find($id);
    return view('post',['post' => $post]);
}); 

Route::get('/destroy/{id}', function($id){
    Post::destroy($id);
    return "post has been deleted!";
});

