<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\AzureAuthController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AzureAuthController::class, 'redirect'])->name('azure.login');
Route::get('/callback', [AzureAuthController::class, 'callback']);

Route::get('/form', [FormController::class, 'form'])->name('form');
Route::post('/store', [FormController::class, 'store'])->name('store');
Route::view('/success', 'success')->name('success');

Route::get('/report', function () {
    return view('report');
});

Route::get('/report', [ReportController::class, 'report'])->name('report');
