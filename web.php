<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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


Route::get('/coins', function () {
    return view('coins');
});


Route::get('/blogs', [BlogController::class, 'viewBlogpost'])->name('blogs');
Route::post('/blogs', [BlogController::class, 'addComment']);

// Test Route
Route::get('/post', [BlogController::class, 'viewBlogpost']);
Route::post('/post', [BlogController::class, 'addComment']);

//Route::get('/blogs', [BlogController::class, 'show']);


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


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');



Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');



Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Test
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
