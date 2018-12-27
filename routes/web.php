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
    return view('index');
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


//office types
Route::get("/office_types", "OfficeTypeController@index");
Route::get("/office_types/show/{id}", "OfficeTypeController@show");
Route::get("/office_types/add", "OfficeTypeController@add");
Route::post("/office_types/add", "OfficeTypeController@create");
Route::get("/office_types/edit/{id}", "OfficeTypeController@edit");
Route::post("/office_types/edit/{id}", "OfficeTypeController@update");
Route::get("/office_types/delete/{id}", "OfficeTypeController@delete");


//notice type
Route::get("/notice_types", "NoticeTypeController@index");
Route::get("/notice_types/show/{id}", "NoticeTypeController@show");
Route::get("/notice_types/add", "NoticeTypeController@add");
Route::post("/notice_types/add", "NoticeTypeController@create");
Route::get("/notice_types/edit/{id}", "NoticeTypeController@edit");
Route::post("/notice_types/edit/{id}", "NoticeTypeController@update");
Route::get("/notice_types/delete/{id}", "NoticeTypeController@delete");

//API Section
Route::get("/api/notices", "ApiController@index");
Route::get("/api/v1/offices/{id}", "ApiController@offices");
Route::get("/api/v1/otypes/{id}", "ApiController@office_types");
Route::get("/api/v1/ntypes/{id}", "ApiController@notice_types");

