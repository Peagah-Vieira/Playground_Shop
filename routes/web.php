<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::view('dashboardtest', 'dashboardtest');
#region Socialite logins
Route::get('login/github/redirect', [LoginController::class, 'redirectToGithub'])->name('login.github.redirect');
Route::get('auth/github/callback', [LoginController::class, 'handleGithubCallback']);

Route::get('login/gitlab/redirect', [LoginController::class, 'redirectToGitlab'])->name('login.gitlab.redirect');
Route::get('auth/gitlab/callback', [LoginController::class, 'handleGitlabCallback']);
#endregion

