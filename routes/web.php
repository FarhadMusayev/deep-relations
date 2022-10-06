<?php

use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
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

Route::get('/has-many-2',function (){
    return Post::find(13)->comments()
        ->where('comment','quod')
        ->first();
});
