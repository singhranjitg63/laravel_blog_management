<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Categorieconttroller;
// login form route
Route::get('/', function () {
    return view('welcome');
});
Route::get('/newp', function () {
    return view('newpage');
});

//home dashborde route
Route::get('/home', function () {
    return view('Home');
});

//user table route
Route::get('/user', function () {
    return view('Users');
});
Route::get('/usercreate', function () {
    return view('createUser');
});
Route::post('user',[Usercontroller::class , 'addUser']);
Route::get('/user',[Usercontroller::class , 'listUser']);

//blog table route 
Route::get('/blog', function () {
    return view('Blogs');
});
Route::get('/blogcreate', function () {
    return view('createBlog');
});

//categories table route
Route::get('/categories', function () {
    return view('Categories');
});
Route::get('/categoriecreate', function () {
    return view('createCategorie');
});
Route::post('categories',[Categorieconttroller::class, 'addCategorie']);

