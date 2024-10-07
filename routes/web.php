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

Route::get('/manager/program/destroy/{user}', '\App\Http\Controllers\SaturdayController@destroy')->name('programDestroy');
Auth::routes();

Route::get('/user', '\App\Http\Controllers\UserController@userPage')->name('userPage');
Route::get('/', '\App\Http\Controllers\Controller@index')->name('homePage');
Route::get('/manager', '\App\Http\Controllers\Controller@back')->name('manager');
Route::post('/manager/login', '\App\Http\Controllers\AdminController@authenticate')->name('adminLogin');
Route::get('/manager/create', '\App\Http\Controllers\UserController@create')->name('create');
Route::post('/manager/store', '\App\Http\Controllers\UserController@store')->name('store');
Route::get('/manager/edit/{user}', '\App\Http\Controllers\UserController@edit')->name('edit');
Route::get('/manager/show', '\App\Http\Controllers\UserController@index')->name('show');
Route::get('/manager/destroy/{user}', '\App\Http\Controllers\UserController@destroy')->name('destroy');
Route::put('/manager/update/{user}', '\App\Http\Controllers\UserController@update')->name('update');

Route::get('/manager/editSaturday/{saturday}', '\App\Http\Controllers\SaturdayController@edit')->name('editSaturday');
Route::put('/manager/updateSaturday/{saturday}', '\App\Http\Controllers\SaturdayController@update')->name('updateSaturday');

Route::get('/manager/program', '\App\Http\Controllers\UserController@program')->name('program');
Route::get('/manager/saturday/create/{user}/{day}', '\App\Http\Controllers\SaturdayController@create')->name('saturday');
Route::get('/manager/sunday/create/{user}/{day}', '\App\Http\Controllers\SundayController@create')->name('sunday');
Route::get('/manager/monday/create/{user}/{day}', '\App\Http\Controllers\MondayController@create')->name('monday');
Route::get('/manager/tuesday/create/{user}/{day}', '\App\Http\Controllers\TuesdayController@create')->name('tuesday');
Route::get('/manager/wednesday/create/{user}/{day}', '\App\Http\Controllers\WednesdayController@create')->name('wednesday');
Route::get('/manager/thursday/create/{user}/{day}', '\App\Http\Controllers\ThursdayController@create')->name('thursday');

Route::post('/manager/saturday/store', '\App\Http\Controllers\SaturdayController@store')->name('storeSaturday');
Route::post('/manager/sunday/store', '\App\Http\Controllers\SundayController@store')->name('storeSunday');
Route::post('/manager/monday/store', '\App\Http\Controllers\MondayController@store')->name('storeMonday');
Route::post('/manager/tuesday/store', '\App\Http\Controllers\TuesdayController@store')->name('storeTuesday');
Route::post('/manager/wednesday/store', '\App\Http\Controllers\WednesdayController@store')->name('storeWednesday');
Route::post('/manager/thursday/store', '\App\Http\Controllers\ThursdayController@store')->name('storeThursday');

Route::get('/user/saturdayProgram', '\App\Http\Controllers\SaturdayController@showProgram')->name('saturdayProgram');
Route::get('/user/sundayProgram', '\App\Http\Controllers\SundayController@showProgram')->name('sundayProgram');
Route::get('/user/mondayProgram', '\App\Http\Controllers\MondayController@showProgram')->name('mondayProgram');
Route::get('/user/tuesdayProgram', '\App\Http\Controllers\TuesdayController@showProgram')->name('tuesdayProgram');
Route::get('/user/wednesdayProgram', '\App\Http\Controllers\WednesdayController@showProgram')->name('wednesdayProgram');
Route::get('/user/thursdayProgram', '\App\Http\Controllers\ThursdayController@showProgram')->name('thursdayProgram');

Route::get('/user/buy/{month}/{status}', '\App\Http\Controllers\UserController@buy')->name('buy');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
