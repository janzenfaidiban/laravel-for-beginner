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
});

Route::get('/home', function() {
    
    // echo "Halaman Home";

    // $nama_depan = "Melan";
    // $nama_belakang = "Tabuni";

    // echo $nama_depan .' '. $nama_belakang;

    return view('home');

});

Route::get('/profile', function() {
    
    // echo "Halaman Profile";
    
    return view('profile');

});

/*
| =================================
| BLOG
| =================================
|*/

Route::get('/blog', function() {
    return view('blog.index');
});

Route::get('/blog/show', function() {
    return view('blog.show');
});
