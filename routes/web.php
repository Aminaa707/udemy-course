<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', "verified"])->name('dashboard');


// Admin all Route
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'adminProfile')->name('admin.profile');
    Route::get('/edit/profile', 'EditAdminProfile')->name('edit.porfile');
    Route::post('/store/profile', 'storeAdminProfile')->name('store.profile');
    Route::get('/change/password', 'changeAdminPassword')->name('change.password');
    Route::post('/update/password', 'updateAdminPassword')->name('update.password');
});











require __DIR__ . '/auth.php';
