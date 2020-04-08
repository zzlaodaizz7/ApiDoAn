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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
// 	
//     return $request->user();
// });
//////////
Route::post('login', 'API\Nguoidungs@login');
Route::post('register', 'API\Nguoidungs@register');


Route::group(['middleware' => 'auth:api'], function(){
	Route::resource('dangtin','API\Dangtins');
	Route::resource('doibong','API\Doibongs');
	Route::resource('thanhvien','API\DoibongNguoidung');
	Route::resource('batdoi','API\Batdois');
	Route::resource('khunggio','API\Khunggios');
});


Route::resource('nguoidung','API\Nguoidungs');
Route::resource('sanbong','API\Sanbongs');
// Route::resource('phanquyen','API\PhanQuyens');

