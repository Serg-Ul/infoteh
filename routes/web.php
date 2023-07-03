<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    SignInController,
    SignUpController,
    Profile\ProfileController,
    Profile\TasksController
};

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/sign-in', [SignInController::class, 'index'])
    ->middleware('guest')
    ->name('signIn');
Route::post('/sign-in-create', [SignInController::class, 'signInCreate'])->name('signInCreate');
Route::get('/sign-up', [SignUpController::class, 'index'])->name('signUp');
Route::post('/sign-up-create', [SignUpController::class, 'signUpCreate'])->name('signUpCreate');

Route::middleware(['auth'])->prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index']);
    Route::get('/logout', [SignInController::class, 'logout'])->name('logout');
    Route::resource('tasks', TasksController::class);
});
