<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Categoriecontroller;
use App\Models\User;

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
Route::post('/usercreate',[Usercontroller::class , 'addUser']);
Route::get('/user',[Usercontroller::class , 'listUser']);
Route::delete('/user/{id}', [Usercontroller::class , 'destroy'])->name('user.destroy');
Route::get('/edit/{id}', [Usercontroller::class , 'edit'])->name('user.edit');
Route::put('/update/{id}', [Usercontroller::class , 'update'])->name('user.update');


//blog table route 
// Route::get('/blog', function () {
//     return view('Blogs');
// });
Route::get('/blogcreate', [BlogController::class, "index"]);
Route::post('/blog', [BlogController::class, "addBlog"]);
Route::get('/blog',[BlogController::class , 'showBlog']);


//categories table route
Route::get('/categories', function () {
    return view('Categories');
});
Route::get('/categoriecreate', function () {
    return view('createCategorie');
});
Route::post('categories',[Categoriecontroller::class, 'addCategorie']);
Route::get('/categories',[Categoriecontroller::class, 'showCategorie']);

