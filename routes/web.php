<?php

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

Route::get('/hello/{id}/{name}', function ($id,$ez) {
    return 'Hello '.$id.' '.$ez;
});

// direct view
Route::get('/dashboard-home', function(){
    return view('dashboard.home');
});

// Controller
Route::get('/dashboard','DashboardController@index');
Route::get('/dashboard/user','DashboardController@user');
Route::resource('posts','PostsController');