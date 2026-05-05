<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/newp',function() {
    return view('newpage');
});
Route::get('/home',function() {
    return view('Home');
});
Route::get('/blog',function() {
    return view('Blog');
});
Route::get('/user',function() {
    return view('User');
});
Route::get('/usercreate',function() {
    return view('createUser');
});
Route::get('/blogcreate',function() {
    return view('createBlog');
});
Route::get('/categories',function() {
    return view('Categories');
});
Route::get('/categoriescreate',function() {
    return view('createCategories');
});