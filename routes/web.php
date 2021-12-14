<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostCommentController;
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
    return view('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/coins', [CoinController::class, 'index']);


Route::get('/blogs', [BlogController::class, 'viewBlogpost'])->name('blogs');
Route::post('/blogs', [PostCommentController::class, 'store']);


Route::get('/post', [BlogController::class, 'createBlogPost']);

Route::post('/post', [BlogController::class, 'store']);



Route::get('/hunch', function () {
    return view('hunch');
});


Route::get('/tips', function () {
    return view('tips');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes(['verify' => true]);

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get("email", [MailerController::class, "email"])->name("email");

Route::post("send-email", [MailerController::class, "composeEmail"])->name("send-email");

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

//Test
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


//Kasia TIPS START

Route::get('/tips', [TipsController::class, 'index']);

Route::get('/tips/create', [TipsController::class, 'create']);

Route::post('/tips', [TipsController::class, 'store']);



Route::get('/tips/up', [TipsController::class, 'orderTipsbyDirection']);



Route::get('/tips', [TipsController::class, 'orderTipsbyCoin']);


Route::get('/tips', [TipsController::class, 'orderTipsbyReason']);

Route::get('/tips', [TipsController::class, 'wentUp']);

//Route::get('/tips',[TipsController::class, 'wentDown']);



Route::get('/tips/{id}', [TipsController::class, 'showSingleTip']);

Route::put('/tips/{id}', [TipsController::class, 'update']);

Route::post('/tips/{id}', [TipsController::class, 'destroy']);




 





/*
Route::get('/tips/create','TipsController@create');

Route::get('/tips/create','TipsController@create');

Route::post('/tips','TipsController@store');

Route::get('/tips','TipsController@orderTipsbyDirection');

Route::get('/tips','TipsController@orderTipsbyCoin');

Route::get('/tips','TipsController@orderTipsbyReason');

Route::get('/tips','TipsController@wentUp');

//Route::get('/tips','TipsController@wentDown');



//TIPS ID 

Route::get('/tips/{id}','TipsController@showSingleTip');


Route::get('/tips/{id}/edit','TipsController@edit');

Route::put('/tips/{id}','TipsController@update');

Route::post('/tips/{id}','TipsController@destroy');



//Kasia: shall work when date in DB/table
//Route::get('/tips','TipsController@latestTips');

//TIPS END

*/
