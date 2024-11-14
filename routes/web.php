<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OverdueController;

//welcome page
Route::get('/', function () {
    return view('welcome');
});


Route::get('/adminDashboard', [AdminController::class, 'index'])->name('adminDashboard');
Route::get('/addLockers', [AdminController::class, 'create'])->name('addLockers');
Route::get('/overdues', [OverdueController::class, 'show'])->name('overdues');