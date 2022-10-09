<?php

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/has-one', function () {
    return User::with('phone')->get();
});

Route::get('/has-one-2', function () {
    return Phone::with('user')->get();
});

Route::get('/has-many', function () {
    return Post::find(13)->comments;
});

Route::get('/has-many-2', function () {
    return Post::find(13)->comments()
        ->where('comment', 'quod')
        ->first();
});

Route::get('has-many-3', function () {
    return Comment::find(1)->post->text;
});

Route::get('has-many-4', function () {
    $post = Post::find(1);
    $owner = $post->user;
    return $owner;
});

Route::get('has-many-5', function () {
    $user = User::find(2);

    return Post::whereBelongsTo($user)->get();
});

Route::get('latest', function () {
    return User::find(2)->latestPost()->get();
});

Route::get('oldest', function () {
    return User::find(2)->oldestPost()->get();
});

Route::get('current', function () {
    return User::find(2)->currentPost()->get();
});

Route::get('has-one-through', function () {
    return User::find(2)->comments()->get();
});

Route::get('/poli-one-to-one', function () {
    $post = Post::find(2);
    return $post->image;
});

Route::get('/poli-many-to-many', function () {
//    $post = Post::create([
//       'user_id' => 1
//    ]);

//    $post->tags()->create([
//       'name' => 'laravel'
//    ]);

//    $post = Post::find(1);
//
//    $tag = \App\Models\Tag::create([
//        'name' => 'PHP'
//    ]);
//
//    $post->tags()->attach($tag);

    $video = Video::create([
        'title' => 'Video title 1'
    ]);

    $tag = Tag::find(1);

    $video->tags()->attach($tag);

    return view('welcome');

});

Route::get('more-3-foreign-key', function () {
   return \App\Models\Teacher::with('payments')->get();
});
