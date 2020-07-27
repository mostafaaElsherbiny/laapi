<?php

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

// Route::group(['middleware' => ['api','checkpass','lang']], function ($router) {
//     Route::post('login', 'AuthController@login');
//     Route::post('/category', 'CategoryController@index');
//     Route::post('/category/{id}', 'CategoryController@show');
//     Route::post('register', 'AuthController@register');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::get('user-profile', 'AuthController@userProfile');
// });
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
], function ($router) {

    Route::post('register', 'Userrr@register');
    Route::post('login', 'Userrr@login')->name('login');
    Route::post('refresh', 'Userrr@refresh');
    Route::get('profile', 'Userrr@profile');
    Route::post('/category', 'CategoryController@index');

    Route::post('logout', 'Userrr@logout');
});
