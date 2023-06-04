<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/V1')->group(function () {
    Route::resource('/test', App\Http\Controllers\Api_Controller2::class);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::get('/user-profile', [App\Http\Controllers\AuthController::class, 'userProfile']);
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
});
// Route::get('/v1',function(){
//     echo "First Api For Test";
// }
//  );



Route::get('/send-notification', [App\Http\Controllers\NotificationController::class, 'sendOfferNotification']);
Route::get('/send', '\App\Http\Controllers\NotificationController@sendOfferNotification')->name('home.send');

