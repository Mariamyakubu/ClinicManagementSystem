<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;



Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/login', [AuthController::class, 'getLoginPage'])->name('auth.getLoginPage');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('getRegisterPage');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');


// Forgot Password Form (GET)
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('auth.forgotPassword');

// Send Reset Link Email (POST)
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])
    ->name('password.email');

// Reset Password Form (GET)
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])
    ->name('password.reset');

// Reset Password (POST)
Route::post('/reset-password', [AuthController::class, 'resetPassword'])
    ->name('password.update');
// Protect routes after login
// Route::middleware('auth')->group(function () {
//     Route::get('/home', function () {
//         return view('home');
//     })->name('home');
// });



// Projects routes

Route::middleware(['auth'])->group(function () {
   // Resource routes for Doctors
Route::resource('doctors', DoctorController::class);

// Resource routes for Patients
Route::resource('patients', PatientController::class);

});
