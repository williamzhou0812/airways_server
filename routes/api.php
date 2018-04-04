<?php

use Illuminate\Http\Request;

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

Route::get('/test', function (Request $request) {
    return "api test";
});

Route::group(['prefix' => 'apartment'], function() {
    Route::get('/', 'ApartmentController@index');
    Route::get('/{apartment}', 'ApartmentController@show');
});

Route::group(['prefix' => 'feature'], function() {
    Route::get('/', 'FeatureController@index');
    Route::get('/{feature}', 'FeatureController@show');
});

Route::group(['prefix' => 'map'], function() {
    Route::get('/', 'MapController@index');
    Route::get('/{map}', 'MapController@show');
});

Route::group(['prefix' => 'gallery'], function() {
    Route::get('/', 'GalleryController@index');
    Route::get('/{gallery}', 'GalleryController@show');
});

Route::group(['prefix' => 'promotion'], function() {
    Route::get('/', 'PromotionController@index');
    Route::get('/{promotion}', 'PromotionController@show');
});

Route::group(['prefix' => 'video'], function() {
    Route::get('/', 'VideoController@index');
    Route::get('/{video}', 'VideoController@show');

});