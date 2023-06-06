<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
// Route::get('/profile','App\Http\Controllers\ProfileController@index');


Route::get('/about-us', function () {
    if(Auth()->check()){
    return view("about");}
    else return "Go To Login";
})->name("abbas");

Route::view('contact-me', 'contact' , [
    "Page_Name" => "Contact Name",
    "Page_Des" => "CDes",
]);

Route::get('/category/{id}', function ($id) {

    $cat = [
        "1" => "Game",
        "2" => "Programing",
        "3" => "Books",
    ];
    return view("Category",[
        "The_Id" => $cat[$id] ?? "This id is not Found"

    ]);
});

Route::get('/send-notification', [App\Http\Controllers\NotificationController::class, 'sendOfferNotification']);
Route::get('/send', '\App\Http\Controllers\NotificationController@sendOfferNotification')->name('home.send');


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});


Route::get('/', [UserAuthController::class, 'index'])
->name('user.home')
->middleware('auth:web');
Route::get('/login', [UserAuthController::class, 'login'])
    ->name('user.login');
Route::post('/login', [UserAuthController::class, 'handleLogin'])
    ->name('user.handleLogin');
Route::get('/logout', [UserAuthController::class, 'index'])
    ->name('user.logout');




Route::get('admin/', [AdminAuthController::class, 'index'])->name('admin.home')->middleware('auth:webadmin');
Route::get('admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'handleLogin'])
    ->name('admin.handleLogin');
Route::get('admin/logout', [AdminAuthController::class, 'index'])
    ->name('admin.logout');
