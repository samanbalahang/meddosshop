<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\thepublic\MainpageController;


// ADMIN USES
use App\Http\Controllers\admin\dashCounterController;
use App\Http\Controllers\admin\dashBannerController;
use App\Http\Controllers\admin\dashTemplatesController;
use App\Http\Controllers\admin\dashPostController;
use App\Http\Controllers\admin\dashMediaController;
use App\Http\Controllers\admin\dashCatsController;
use App\Http\Controllers\admin\dashTagesController;
use App\Http\Controllers\admin\dashPagesController;
use App\Http\Controllers\admin\dashAdvController;
use App\Http\Controllers\admin\dashCommentController;
use App\Http\Controllers\admin\dashProductController;
use App\Http\Controllers\admin\dashMarketerController;
use App\Http\Controllers\admin\dashFormController;
use App\Http\Controllers\admin\dashUserProfileController;
use App\Http\Controllers\admin\dashCatFeatureController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\loginController;
//END ADMIN USES
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





// Route::group(['prefix' => 'mt-panel', 'middleware' => ['auth','role:role_admin']],function(){
Route::group(['prefix' => 'mt-panel'],function(){
    Route::resource('/',dashCounterController::class);
    Route::resource('/banner',dashBannerController::class);
    Route::resource('/tremplates',dashTemplatesController::class);
    Route::resource('/posts',dashPostController::class);
    Route::resource('/media',dashMediaController::class);
    Route::post('/dropMedia',[dashMediaController::class,"dropMedia"])->name('dropMedia');
    Route::post('/summer-note-media',[dashMediaController::class,"summerNoteMedia"])->name('summerNoteMedia');
    Route::resource('/cats',dashCatsController::class);
    Route::resource('/tags',dashTagesController::class);
    Route::resource('/pages',dashPagesController::class);
    Route::resource('/advs',dashAdvController::class);
    Route::resource('/comments',dashCommentController::class); 
    Route::resource('/products',dashProductController::class); 
    Route::resource('/marketers',dashMarketerController::class);
    Route::resource('/forms',dashFormController::class);
    Route::resource('/users',dashUserProfileController::class);
    Route::resource('/coupons',dashUserProfileController::class);
    Route::resource('/cat-feature',dashCatFeatureController::class);
});


/*-----------------------------
|
|
|       PUBLIC ROUTES
|
|-------------------------------*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',      [MainpageController::class,"index"]);
Route::get('/login', [MainpageController::class,"login"])->name("login");
