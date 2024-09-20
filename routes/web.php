<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// creo le rotte protette della dashboard (perché questa sarà accessibile solo da Admin)
Route::middleware(['auth', 'verified'])
    // prefisso nell'url
    ->prefix('admin')
    // nome della rotta deve essere preceduto da admin.
    ->name('admin.')
    ->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('home');
    });

require __DIR__.'/auth.php';
