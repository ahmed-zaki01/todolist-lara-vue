<?php

use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('items', 'ItemController@index')->name('items');

Route::prefix('item')->group(function () {
    Route::post('store', 'ItemController@store')->name('store');
    Route::put('{id}', 'ItemController@update')->name('update');
    Route::delete('{id}', 'ItemController@destroy')->name('destroy');
});
