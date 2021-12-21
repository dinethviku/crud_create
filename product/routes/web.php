<?php

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('form');
});
Route::post('/add', function (Request $request){
    $product = new App\Models\Product;
    $product->codeNumber = $request->codeNumber;
    $product->name = $request->name;
    $product->description = $request->description;
    $product->expire_date = $request->expire_date;
    $product->save();

    return view('form');
});
