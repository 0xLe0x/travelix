<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Web3LoginController;
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

Route::get('/home',function() {
    return redirect('/dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/buy-token', function () {
    return view('backend.buy-token');
})->middleware(['auth'])->name('buy-token');

Route::get('/my-token', function () {
    return view('backend.my-token');
})->middleware(['auth'])->name('my-token');

Route::get('/transactions', function () {
    return view('backend.transactions');
})->middleware(['auth'])->name('transactions');

Route::get('/web3-login-message', [Web3LoginController::class, 'message']);

Route::post('/web3-login-verify', [Web3LoginController::class, 'verify']);

require __DIR__.'/auth.php';
