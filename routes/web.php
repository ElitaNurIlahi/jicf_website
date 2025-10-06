<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\Admin\SettingController;

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-jicf', [PageController::class, 'about'])->name('about.jicf');
Route::get('/registration', [PageController::class, 'registration'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/agenda', [PageController::class, 'agenda'])->name('agenda');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Information routes
Route::prefix('information')->name('information.')->group(function () {
    Route::get('/about-host', [PageController::class, 'aboutHost'])->name('about-host');
    Route::get('/venue', [PageController::class, 'venue'])->name('venue');
    Route::get('/accommodation', [PageController::class, 'accommodation'])->name('accommodation');
    Route::get('/social-activity', [PageController::class, 'socialActivity'])->name('social-activity');
    Route::get('/about-jakarta', [PageController::class, 'aboutJakarta'])->name('about-jakarta');
});

// Admin Routes (sama seperti sebelumnya)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login']);
    });
    
    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/registrations', [AdminRegistrationController::class, 'index'])->name('registrations.index');
        Route::get('/registrations/{id}', [AdminRegistrationController::class, 'show'])->name('registrations.show');
        Route::post('/registrations/{id}/approve', [AdminRegistrationController::class, 'approve'])->name('registrations.approve');
        Route::post('/registrations/{id}/reject', [AdminRegistrationController::class, 'reject'])->name('registrations.reject');
        Route::post('/registrations/{id}/send-qr', [AdminRegistrationController::class, 'sendQrCode'])->name('registrations.send-qr');
        Route::post('/registrations/bulk-send-qr', [AdminRegistrationController::class, 'bulkSendQrCode'])->name('registrations.bulk-send-qr');
        Route::delete('/registrations/{id}', [AdminRegistrationController::class, 'destroy'])->name('registrations.destroy');
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
        Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');
    });
});