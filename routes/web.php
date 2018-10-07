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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notices', "NoticeController@index")->name("notices");
Route::get("/notices/add", "NoticeController@add");
Route::post("/notices/add", "NoticeController@create");
Route::get("/notices/edit/{id}", "NoticeController@edit");
Route::post("/notices/edit/{id}", "NoticeController@update");
Route::get("/notices/delete/{id}", "NoticeController@delete");
Route::get("/notices/show/{id}", "NoticeController@show");
Route::get('/users', "UserController@index");


//Companies
Route::get("/companies", "CompaniesController@index");
Route::get("/companies/show/{id}", "CompaniesController@show");
Route::get("/companies/add", "CompaniesController@add");
Route::post("/companies/add", "CompaniesController@create");
Route::get("/companies/edit/{id}", "CompaniesController@edit");
Route::post("/companies/edit/{id}", "CompaniesController@update");
Route::get("/companies/delete/{id}", "CompaniesController@delete");

//API Section
Route::get("/api/notices", "ApiController@index");
