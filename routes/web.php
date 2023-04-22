<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\QueryBuilderConroller;
use App\Http\Controllers\RessourceController;
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
    $username = 'ismahen abdalladh';

    return view('welcome', compact('username'));
});
Route::get('/user/{ismahen}', function ($name) {
    // return $name;
    return view('params', ['name' => $name]);
});

Route::get('/inheritance', function () {

    return view('inheritance');
});
// Route::get('/posts', [PostController::class, 'index']);

// Route::get('/post/{id}', PostController::class);

Route::controller(PostController::class)->group(function () {
        Route::get('/posts', 'index');
        //http://127.0.0.1:8000/posts/ddd
        Route::get('/posts/{id}', 'showId');

});
//delete All lazmou 9bal -->Route::resource('routequerybuilder', QueryBuilderConroller::class);
Route::delete('routequerybuilder/deleteall', [QueryBuilderConroller::class, 'deleteAll'])->name('routequerybuilder.deleteAll');
Route::delete('routequerybuilder/truncate', [QueryBuilderConroller::class, 'deleteTruncate'])->name('routequerybuilder.deleteTruncate');
Route::resource('routequerybuilder', QueryBuilderConroller::class);
Route::resource('resssource', RessourceController::class);
//Route::resource('resssource', RessourceController::class)->only(['create']);//  5adem kan el create --> user/create
//Route::resource('resssource', RessourceController::class)->except(['show']);// 5adem kol chy kan el show leee --> user/show
