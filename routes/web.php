<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalesmanController;
use App\Http\Controllers\SalesmanAuthController;
use App\Http\Controllers\SalesmanviweController;



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



// admin side
Route::get('/', function () {
    return view('admin.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('admin.login');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');
// admin middleware

Route::middleware('auth')->group(function () {

    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');


Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('change.password.form');

Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change.password');

Route::resource('salesmans', SalesmanController::class);

Route::get('/sample', [SalesmanController::class, 'sample'])->name('sample.form');


});


