<?php

use App\Http\Controllers\ChiTieuController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



    Route::get('/', [ChiTieuController::class, 'index'])->name('chitieu.index');
    Route::get('/create', [ChiTieuController::class, 'create'])->name('chitieu.create');
    Route::post('/store', [ChiTieuController::class, 'store'])->name('chitieu.store');
    Route::get('/show/{id}', [ChiTieuController::class, 'show'])->name('chitieu.show');
    Route::get('/edit/{id}', [ChiTieuController::class, 'edit'])->name('chitieu.edit');
    Route::put('/update/{id}', [ChiTieuController::class, 'update'])->name('chitieu.update');
    Route::delete('destroy/{id}', [ChiTieuController::class, 'destroy'])->name('chitieu.destroy');
