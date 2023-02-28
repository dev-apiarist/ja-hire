<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('listings')->group(function () {
    Route::get('/', [ListingController::class, 'index'])->name('index');
    Route::post('/', [ListingController::class, 'store'])->name('store');
    Route::get('/create', [ListingController::class, 'create'])->name('create');
    Route::get('/{listing}/edit', [ListingController::class, 'edit'])->name('edit');
    Route::delete('/{listing}', [ListingController::class, 'delete'])->name('delete');
    Route::pur('/{listing}', [ListingController::class, 'update'])->name('update');
    Route::get('/manage', [ListingController::class, 'manage'])->name('manage');
    Route::get('/{listing}', [ListingController::class, 'show'])->name('show');
});
