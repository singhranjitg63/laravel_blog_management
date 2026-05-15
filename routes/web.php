<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{BlogController, Categoriecontroller, UsersController};
use App\Models\User;

// login form route
Route::get('/', function () {
    return view('welcome');
});

//home dashborde route
Route::get('/home', function () {
    return view('Home');
});


//user table route
Route::get('/user', function () {
    return view('Users');
});
// Route::post('/usercreate',[Usercontroller::class , 'addUser']);
// Route::get('/user',[Usercontroller::class , 'listUser']);
// Route::delete('/user/{id}', [Usercontroller::class , 'destroy'])->name('user.destroy');
// Route::get('/edit/{id}', [Usercontroller::class , 'edit'])->name('user.edit');
// Route::put('/update/{id}', [Usercontroller::class , 'update'])->name('user.update');
// Route::get('/search',[Usercontroller::class , 'search']);

Route::group(['prefix' => 'users'], function() {
    Route::post('/', [UsersController::class , 'store'])->name('users.store');
    Route::get('/', [UsersController::class , 'index'])->name('users.index');
    Route::get('/create', [UsersController::class , 'create'])->name('users.create');
    Route::delete('/{id}', [UsersController::class , 'destroy'])->name('users.destroy');
    Route::get('/{id}/edit', [UsersController::class , 'edit'])->name('users.edit');
    Route::put('/{id}', [UsersController::class , 'update'])->name('users.update');
    // Route::get('/search',[UsersController::class , 'search']);
});

// Listin           - GET /users-> index()
// create           - POST /users -> save()
// Show Create form - GET /users/create -> create()

// Update           - PUT /users/{id} -> update()
// Update form      - GET /users/{id}/edit -> edit()
// DELETE           - DELETE /users/{id} -> delete()
// Single Record    - GET /users/{id} -> show()

//blog table route 
// Route::get('/blog', function () {
//     return view('Blogs');
// });
Route::get('/blogcreate', [BlogController::class, "index"]);
Route::post('/blog', [BlogController::class, "addBlog"]);
Route::get('/blog',[BlogController::class , 'showBlog']);
Route::get('/editBlog/{id}', [BlogController::class , 'editBlog'])->name('blog.edit');
Route::put('/updateBlog/{id}', [BlogController::class , 'updateBlog'])->name('blog.update');
Route::get('/search',[BlogController::class , 'search']);


//categories table route
// Route::get('/categories', function () {
//     return view('Categories');
// });
Route::get('/categoriecreate', function () {
    return view('createCategorie');
});
Route::post('/categories',[Categoriecontroller::class, 'addCategorie']);
Route::get('/categories',[Categoriecontroller::class, 'showCategorie']);
Route::get('/editCategory/{id}', [Categoriecontroller::class , 'editCategory'])->name('editCategory');
Route::put('/updateCategory/{id}', [Categoriecontroller::class , 'updateCategory'])->name('updateCategory');

