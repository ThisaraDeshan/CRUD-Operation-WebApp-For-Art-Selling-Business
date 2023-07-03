<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\welcomecontroller;
use Illuminate\Routing\Controllers\Middleware;
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
});

Auth::routes();

Route::group(['Middleware'=>'auth'],function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/posts/store',[postcontroller::class,'store'])->name('posts.store');

Route::get('/',[welcomecontroller::class,'index'])->name('welcome');

Route::get('/{postid}/show',[postcontroller::class,'show'])->name('show');

Route::get('/',[postcontroller::class,'back'])->name('back');

Route::get('/allposts',[postcontroller::class,'allposts'])->name('allposts');

Route::get('/{postid}/edit',[postcontroller::class,'edit'])->name('edit');

Route::post('/{postid}/update',[postcontroller::class,'update'])->name('update');

Route::get('/{postid}/delete',[postcontroller::class,'delete'])->name('delete');

Route::match(['get', 'post'], '/botman', function () {
    app('botman')->listen();
});

});

//admin routes

Route::group(['Middleware'=>['auth','admin']],function(){
    Route::get('/dashboard', ['middleware'=>'admin', admincontroller::class,'index'])->name('admindashboard');
});

