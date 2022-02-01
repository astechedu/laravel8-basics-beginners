<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
//Route::method($uri, $callback);

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/posts', function () {
    echo "Posts";
});

Route::get('/users', function () {
    return view('users.index');
});
*/
//Route::view('/users','users.contact');

//User
//Route::get('/profile', [UserController::class, 'index'])->name('users.profile');
//Route::get('/contact', [UserController::class, 'contact'])->name('users.contact');

//Admin
//Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
//Route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');



   
//--> Routing: Parameters, Optional Parameters & Regular Expression Constraints <-------

Route::get('/users/{id}', function ($id) {
    echo $id;
});


Route::get('/posts/{name?}', function ($name = null) {
    return $name;
});


Route::get('/employee/{id}', function ($id) {
    echo $id;
})->where('id', '[0-9]+');




//--> Routing: Parameters, Optional Parameters & Regular Expression Constraints <-------














//  ---------> Routing: Prefix & Group <-----------------------------------------
/*
Route::prefix('users')->group(function(){

	Route::get('index', [UserController::class, 'index'])->name('users.index');           
	Route::get('contact', [UserController::class, 'contact'])->name('users.contact');         
});


Route::prefix('admin')->group(function(){

	Route::get('index', [AdminController::class, 'index'])->name('admin.index');  
	Route::get('contact', [AdminController::class, 'contact'])->name('admin.contact');      
});
*/
//  ---------> Routing: Prefix & Group <-----------------------------------------



