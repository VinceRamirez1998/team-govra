<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\GovernmentController;
use App\HTTP\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/user-index', function () {
    return view('user-index');
});

Route::get('/find-jobs', function () {
    return view('find-jobs');
});

Route::get('/government', function () {
    return view('government');
});


Route::get('job-offers-user',[GovernmentController::class, 'index'])->name('user/job-offers-user');
// Route::get('job-offers-user', function () {
//     return view('user/job-offers-user');
// });
Route::get('job-clicked-user/{id}', [UserController::class, 'fetch'])->name('user/job-clicked-user');
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