<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelPlanController;
use App\Http\Controllers\BudgetPlanController;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', function () {
    return redirect('/travel-plans');
});

Route::resource('travel-plans', TravelPlanController::class);
Route::resource('travel-plans.budget-plans', BudgetPlanController::class);

Route::get('/log-viewer', function () {
    return redirect('/log-viewer'); // Ini mengarahkan ke package log-viewer jika sudah di-install
})->name('log-viewer');