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

Route::get('/', '\App\Http\Controllers\IndexController@index')->name('index');
Route::get('/questionnaire', '\App\Http\Controllers\IndexController@questionnaire')->name('questionnaire');
Route::post('/questionnaire', '\App\Http\Controllers\IndexController@questionnairePost')->name('questionnaire.post');
Route::get('/report', '\App\Http\Controllers\IndexController@report')->name('report');

Route::get('/login', '\App\Http\Controllers\AuthController@login')->name('login');
Route::post('/login', '\App\Http\Controllers\AuthController@loginPost')->name('login.post');
Route::get('/logout', '\App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', '\App\Http\Controllers\Admin\DashboardController@index')->name('admin.dashboard');

    Route::get('/respondents', '\App\Http\Controllers\Admin\RespondentController@index')->name('admin.respondents');
});