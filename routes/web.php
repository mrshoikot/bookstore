<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\UserController;
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
Route::resource('books', BookController::class)->middleware('auth');
Route::get('remove-book/{id}', [BookController::class, 'removeBook'])->middleware('auth')->name('removeBook');
Route::resource('offers', OfferController::class)->middleware('auth');
Route::get('change-password', function () {
    return view('change-password');
})->middleware('auth')->name('change-password');
Route::post('change-password', [UserController::class, 'changePassword'])->middleware('auth')->name('change-password');
Route::get('profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');
Route::put('update-profile', [UserController::class, 'updateProfile'])->middleware('auth')->name('updateProfile');

Route::get('/dashboard', [BookController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
