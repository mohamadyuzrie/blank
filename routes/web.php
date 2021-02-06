<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuppliersController;

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

Route::middleware(['auth'])->group(function () {
    Route::view('home', 'home')->name('home');

    Route::post('suppliers/{id}/print', [SuppliersController::class, 'print'])->name('suppliers.print');
    Route::resource('suppliers', SuppliersController::class);
});
