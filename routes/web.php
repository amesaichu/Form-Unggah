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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/upload/form', 'ProdukController@uploadForm');
Route::post('/upload/action', 'ProdukController@uploadAction');

Route::get('/multiple-upload/form', 'ProdukController@multipleUploadForm');
Route::post('/multiple-upload/action', 'ProdukController@multipleUploadAction');


Route::get('/reporting','ReportingController@index');
Route::get('/reporting/preview','ReportingController@previewPdf');
Route::get('/reporting/print','ReportingController@printPdf');

//shopping
Route::get('/shopping','ShoppingController@listProduk');
Route::get('/shopping/cart','ShoppingController@cart');
Route::get('/shopping/cart/checkout/{notaId}','ShoppingController@checkout');


