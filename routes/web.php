<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/layouts/main', function () {
    return view('layouts/main');
});

//____________________________________________________

// Route::get('/myapp/home', function () {
//     return view('myapp/home');
// });
// Route::get('/myapp/product', function () {
//     return view('myapp/product');
// });
// Route::get('/myapp/teams', function () {
//     return view('myapp/teams');
// });
// Route::get('/myapp/about', function () {
//     return view('myapp/about');
// });
// Route::get('/myapp/contact', function () {
//     return view('myapp/contact');
// });

//_______________________________________________________________

// Route::get('/myapp/home',[ProductController::class,'home']);
// Route::get('/myapp/product',[ProductController::class,'product']);
// Route::get('/myapp/teams',[ProductController::class,'teams']);
// Route::get('/myapp/about',[ProductController::class,'about']);
// Route::get('/myapp/contact',[ProductController::class,'contact']);

//_____________________________________________________________

Route::get('/',[ProductController::class,'home'])->name('myapp/home');
Route::get('service',[ProductController::class,'product'])->name('myapp/product');
Route::get('/teams',[ProductController::class,'teams'])->name('myapp/teams');
Route::get('/about',[ProductController::class,'about'])->name('myapp/about');
Route::get('/contact',[ProductController::class,'contact'])->name('myapp/contact');

