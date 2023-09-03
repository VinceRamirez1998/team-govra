<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\GovernmentController;
use App\Http\Controllers\NewsUpdateController;
use App\HTTP\Controllers\UserController;
use App\HTTP\Controllers\TextWidgetController;
use App\Http\Controllers\UserIndexController;
use App\Models\NewsUpdates;
use App\Models\Examination;
use App\Models\TextWidget;
use App\Models\Users;

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
    return view('home');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/login', [AuthController::class, 'index'])->name('auth/login');

// Route::get('/signup', function () {
//     return view('signup');
// });

Route::get('/signup', [AuthController::class, 'signup'])->name('auth/signup');

Route::post('post-signup', [AuthController::class, 'postSignup'])->name('signup.post');



// Route::group([], function(){
//     Route::get('/user-index', [NewsUpdateController::class, 'index'])->name('user/user-index');
//     Route::get('/user-index', [NewsUpdateController::class, 'announce'])->name('user/user-index');
// });

//totoo
Route::get('/user-index', [UserIndexController::class, 'ShowData'])->name('user/user-index');


// Route::controller(UserIndexController::class)->group(function() {
//     Route::get('/user-index', 'announce')->name('user/user-index');
//     Route::get('/user-index', 'NewsUpdates')->name('user/user-index');
// });



// Route::get('/user-index', [AnnouncementController::class, 'announce'])->name('user/user-index');



Route::get('/find-jobs', function () {
    return view('find-jobs');
});

Route::get('/government', function () {
    return view('government');
});


Route::get('/job-offers-user',[GovernmentController::class, 'index'])->name('user/job-offers-user');
// Route::get('job-offers-user', function () {
//     return view('user/job-offers-user');
// });
Route::get('/job-clicked-user/{id}', [UserController::class, 'fetch'])->name('user/job-clicked-user');
Route::get('government-job-offers', function () {
    return view('user/government-job-offers');
});
Route::get('government-reviews', function () {
    return view('user/government-reviews');
});
Route::get('user-write-review', function () {
    return view('user/user-write-review');
});
Route::get('apply-job', function () {
    return view('user/apply-job');
});