<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\HTTP\Controllers\Auth\GoogleController;
use App\HTTP\Controllers\Auth\GithubController;

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
    return Inertia::render('Auth/Login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

//Google Oauth
Route::get('/auth/google/redirect', [GoogleController::class, 'handleGoogleRedirect']);
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//Github Oauth
Route::get('/auth/github/redirect', [GithubController::class, 'handleGithubRedirect']);
Route::get('/auth/github/callback', [GithubController::class, 'handleGithubCallback']);