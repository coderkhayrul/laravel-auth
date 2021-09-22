<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', [BackendController::class, 'dashboard'])->name('dashboard');

    Route::get('/alltable', [BackendController::class, 'table_view'])->name('table.view');
});
