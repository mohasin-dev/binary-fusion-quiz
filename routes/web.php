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

Route::get('second-buyer-eloquent', 'BuyerController@secondBuyerEloquent');
Route::get('second-buyer-no-eloquent', 'BuyerController@secondBuyerNoEloquent');
Route::get('purchase-list-eloquent', 'BuyerController@purchaseListEloquent');
Route::get('purchase-list-no-eloquent', 'BuyerController@purchaseListNoEloquent');

Route::get('record-transfer', 'RecordTransferController@transfer');
Route::get('define-callback-js', 'JsController@defineCallbackJs');
Route::get('sort-js', 'JsController@sortJs');
Route::get('foreach-js', 'JsController@foreachJs');
Route::get('filter-js', 'JsController@filterJs');
Route::get('map-js', 'JsController@mapJs');
Route::get('reduce-js', 'JsController@reduceJs');
Route::get('animation', 'AnimationController@animateTheBox');
Route::get('i-m-funny', 'FunPartController@funPart');
Route::get('fire-webhook', 'WebhookController@fire');
Route::get('receive-webhook', 'WebhookController@receive');
