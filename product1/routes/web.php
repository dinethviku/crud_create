<?php

use App\Http\Controllers\Productcontroller;
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

Route::get('/', [Productcontroller::class, 'index']);
Route::post('/add', [Productcontroller::class, 'store']);
Route::get('/view', [Productcontroller::class, 'show']);
Route::get('/view/{product}', [Productcontroller::class, 'find']);
Route::post('/update', [Productcontroller::class, 'update']);
Route::get('/delete/{product}', [Productcontroller::class, 'destroy']);


