<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('/');

// Route::get('/post/{id?}', function (string $id = null) {
//     if($id){

//         return "<h1>Post ID: ". $id ." </h1>";
//     }
//     else
//     {
//         return "<h1>no id found</h1>";
//     }
//     // return view('post');
// })->where('id', '[a-zA-Z]+');
// ->where('id', '[0-9]+');
// ->whereIn('id', ['song', 'paint', 'file']);
Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $commentid = null) {
    if($id){

        return "<h1>Post ID: ". $id ." </h1><h1>". $commentid."</h1>";
    }
    else
    {
        return "<h1>no id found</h1>";
    }
    // return view('post');
})->where('id', '[a-zA-Z]+')->whereIn('commentid', ['laravel', 'php', 'html', 'js']);
