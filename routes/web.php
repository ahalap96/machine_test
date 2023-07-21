<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\Homecontroller@home')->name('home');
Route::get('/add_dept','App\Http\Controllers\Homecontroller@adddept')->name('adddept');
Route::post('/dept_save','App\Http\Controllers\Homecontroller@deptsave')->name('deptsave');

Route::get('/add_emp','App\Http\Controllers\Homecontroller@addemp')->name('addemp');
Route::post('/emp_save','App\Http\Controllers\Homecontroller@empsave')->name('empsave');

Route::get('/view_cmplnt','App\Http\Controllers\Homecontroller@viewcomplaint')->name('viewcomplaint');
Route::get('/kseb_cmp','App\Http\Controllers\Homecontroller@viewksebcmp')->name('viewksebcmp');
Route::get('/water_cmp','App\Http\Controllers\Homecontroller@viewwatercmp')->name('viewwatercmp');
Route::get('/trans_cmp','App\Http\Controllers\Homecontroller@viewtranscmp')->name('viewtranscmp');

Route::get('/reply/{id}','App\Http\Controllers\Homecontroller@reply')->name('reply');
Route::post('/replysave','App\Http\Controllers\Homecontroller@replysave')->name('replysave');

Route::get('/cmplnt_dept','App\Http\Controllers\Homecontroller@complaintdept')->name('complaintdept');
Route::get('/cmplnt_date','App\Http\Controllers\Homecontroller@complaintdate')->name('complaintdate');


Route::get('/user','App\Http\Controllers\Homecontroller@user')->name('user');
Route::get('/add_kseb','App\Http\Controllers\Homecontroller@ksebcmp')->name('ksebcmp');
Route::post('/kseb_save','App\Http\Controllers\Homecontroller@ksebsave')->name('ksebsave');

Route::get('/add_water','App\Http\Controllers\Homecontroller@watercmp')->name('watercmp');
Route::post('/water_save','App\Http\Controllers\Homecontroller@watersave')->name('watersave');

Route::get('/add_transprt','App\Http\Controllers\Homecontroller@transcmp')->name('transcmp');
Route::post('/transp_save','App\Http\Controllers\Homecontroller@transpsave')->name('transpsave');

Route::get('/view_cmp','App\Http\Controllers\Homecontroller@userviewcmp')->name('userviewcmp');

Route::get('/update','App\Http\Controllers\Homecontroller@update')->name('update');
Route::get('/pending/{id}','App\Http\Controllers\Homecontroller@pending')->name('pending');