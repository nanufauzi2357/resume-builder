<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/create-resume', function () {
    return view('create-resume');
});

Route::get('/resume-created', function () {
    return view('resume-created');
});

Route::post('/create-resume', 'App\Http\Controllers\ResumeController@createResume');
Route::get('/view-resume/{id}', 'App\Http\Controllers\ResumeController@viewResume');