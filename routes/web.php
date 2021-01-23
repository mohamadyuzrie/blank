<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');

    Route::post('users-yajra', [UsersController::class, 'yajra'])->name('users.yajra');
    Route::post('users-datatable-manual', [UsersController::class, 'manualDatatable'])->name('users.datatable.manual');
    Route::post('users-list', [UsersController::class, 'list'])->name('users.list');
    Route::resource('users', UsersController::class);
});
