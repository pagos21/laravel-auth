<?php

use App\Http\Controllers\GuestCtrl;
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
Auth::routes();

Route::get('/', 'EmployeeCtrl@index')->name('index');
Route::get('/emp/{id}', 'EmployeeCtrl@show')->name('emp-show');
// Only 4 logged in Users
Route::get('/emp/edit/{id}', 'RestrL1Ctrl@edit')->name('emp-edit');
Route::post('/emp/update/{id}', 'RestrL1Ctrl@update')->name('emp-update');

Route::get('/emp/del/{id}', 'RestrL1Ctrl@del')->name('emp-del');

Route::get('/newEmp', 'RestrL1Ctrl@new')->name('emp-new');
Route::post('/storeEmp', 'RestrL1Ctrl@store')->name('emp-store');
