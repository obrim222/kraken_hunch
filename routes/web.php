
<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\PostCommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckWinnersLosers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\StripeController;


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
//function removed --delete these routes
//Route::get('/', [HomeController::class, 'show']);
//Route::get('home', [HomeController::class, 'show']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'showblogs']);

Route::get('/home', [HomeController::class, 'showblogs']);
//Route::get('home', [HomeController::class, 'showblogs']);

Route::get('/coins', [CoinController::class, 'index']);

/*
Route::get('/blogs', [PostCommentController::class, 'index'])->name('blogs');

Route::post('/blogs', [PostCommentController::class, 'store']);

Route::get('/blogArticleADA/{id}/delete', [PostCommentController::class, 'delete']);
Route::get('/blogArticleBTC/{id}/delete', [PostCommentController::class, 'delete']);
Route::get('/blogArticleETH/{id}/delete', [PostCommentController::class, 'delete']);
Route::get('/blogArticleSOL/{id}/delete', [PostCommentController::class, 'delete']);


Route::group(['middleware' => ['admin']], function () {
    Route::get('/blogArticleADA', 'HomeController@adminView');
});


Route::group(['middleware' => ['admin']], function () {
    Route::get('/blogArticleBTC', 'HomeController@adminView');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/blogArticleETH', 'HomeController@adminView');
});


Route::group(['middleware' => ['admin']], function () {
    Route::get('/blogArticleSOL', 'HomeController@adminView');
});

*/

Auth::routes();

Route::get('/blogsdetail', [BlogDetailController::class, 'createBlogPost'])->name('post');

Route::post('/blogsdetail', [BlogDetailController::class, 'store']);

Route::get('/blogsdetail', [BlogDetailController::class, 'index']);
//Route::get('/blogsdetail', [BlogDetailController::class, 'addComment']);

/*
Route::get('/blogArticleADA', [PostCommentController::class, 'blogArticleADA']);

Route::get('/blogArticleBTC', [PostCommentController::class, 'blogArticleBTC']);

Route::get('/blogArticleETH', [PostCommentController::class, 'blogArticleETH']);

Route::get('/blogArticleSOL', [PostCommentController::class, 'blogArticleSOL']);*/

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


Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

//Kasia TIPS START
Route::get('home', [CheckWinnersLosers::class, 'checkWinnersLosers']);
Route::get('/tips', [TipsController::class, 'index']);

Route::get('/tips/create', [TipsController::class, 'create']);

Route::get('/', [HomeController::class, 'showblogs']);

Route::post('/tips', [TipsController::class, 'store']);


//admin


//Route::get('/adminPage', [AdminController::class, 'createBlogPost'])->name('post');

Route::post('/adminPage', [AdminController::class, 'store']);

Route::get('/adminPage', [AdminController::class, 'index']);

//Route::post('/adminPage/delete/{id}', [UserController::class, 'delete']);
//Route::get('/adminPage', [UserController::class, 'show']);
//Route::post('/adminPage', [PostCommentController::class, 'store']);
//Route::get('/adminPage', [PostCommentController::class, 'show']);


Route::webhooks('/http://a60b-2a02-678-5c1-8e00-6d95-9a9f-4e90-ad07.ngrok.io/');



//Route::group(['middleware' => ['admin']], function () {
//    Route::get('/adminPage/delete/{id}', 'HomeController@adminView');
//});

//Route::group(['middleware' => ['admin']], function () {
  //  Route::get('/adminPage', 'HomeController@adminView');
//});


//Route::get('/adminPage', [UserController::class, 'show']);


//Route::get('/tips/up', [TipsController::class, 'orderTipsbyDirection']);

//Route::get('/tips', [TipsController::class, 'orderTipsbyCoin']);


//Route::get('/tips', [TipsController::class, 'orderTipsbyReason']);

//Route::get('/tips', [TipsController::class, 'wentUp']);

//Route::get('/tips',[TipsController::class, 'wentDown']);

//Route::get('/tips/{id}', [TipsController::class, 'showSingleTip']);

//Route::put('/tips/{id}', [TipsController::class, 'update']);

//Route::post('/tips/{id}', [TipsController::class, 'destroy']);

Route::get('/blogs', [BlogController::class, 'index']);



Route::get('/coins', [CoinController::class, 'index']);




//Auth::routes();


Route::group(['middleware' => ['admin']], function () {

    Route::get('/admin', [LoginAdminController::class, 'adminView']);
});

// Stripe Payment Gateway

Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

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

//TIPS END
/*
Route::get('/test', function () {
    $data = array('name' => "Our Code World");
    // Path or name to the blade template to be rendered
    $template_path = 'email_template';

    Mail::send(['text' => $template_path], $data, function ($message) {
        // Set the receiver and subject of the mail.
        $message->to('simon-bertrand@live.fr', 'Receiver Name')->subject('Laravel First Mail');
        // Set the sender
        $message->from('johndoetest11@hotmail.com', 'Our Code World');
    });

    return "Basic email sent, check your inbox.";
});

*/