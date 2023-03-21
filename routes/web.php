<?php

use App\Http\Controllers\Admin\Post\IndexController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/contacts',[ContactsController::class,'index'])->name('contact.index');
Route::get('/main',[MainController::class,'index'])->name('main.index');

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::group(['namespace' => 'Post'], function() {
        Route::get('/posts', 'IndexController')->name('admin.post.index');
        Route::get('/posts/create','CreateController')->name('admin.post.create');
        Route::get('/posts/{post}','ShowController')->name('admin.post.show');
        Route::get('/posts/{post}/edit','EditController')->name('admin.post.edit');
        Route::delete('/posts/{post}','DeleteController')->name('admin.post.delete');
        Route::patch('/posts/{post}','UpdateController')->name('admin.post.update');
        Route::post('/posts','StoreController')->name('admin.post.store');
    });
});
Route::group(['namespace' => 'App\Http\Controllers\Post'], function() {

    Route::get('/posts','IndexController')->name('post.index');
    Route::get('/posts/create','CreateController')->name('post.create');
    Route::post('/posts','StoreController')->name('post.store');
    Route::get('/posts/{post}','ShowController')->name('post.show');
    Route::get('/posts/{post}/edit','EditController')->name('post.edit');
    Route::patch('/posts/{post}','UpdateController')->name('post.update');
    Route::delete('/posts/{post}','DeleteController')->name('post.delete');
});

Route::get('/posts/update',[PostController::class,'update']);
Route::get('/posts/delete',[PostController::class,'delete']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
