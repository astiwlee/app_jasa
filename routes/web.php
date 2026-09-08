<?php

use Illuminate\Support\Facades\Route;

// Public Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// Admin Controllers
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================
// 1. PUBLIC ROUTES
// ==========================================
// Menggunakan HomeController untuk mengirim data dinamis ke halaman depan
Route::get('/', [HomeController::class, 'index'])->name('home');

// ==========================================
// 2. AUTHENTICATION ROUTES
// ==========================================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ==========================================
// 3. ADMIN ROUTES
// ==========================================
// Semua route di dalam grup ini dilindungi oleh middleware 'auth' (harus login)
// dan middleware 'admin' (harus punya role admin).
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    
    // Dashboard Admin
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // CRUD Layanan
    Route::resource('services', ServiceController::class);
    
    // CRUD Paket Harga
    Route::resource('packages', PackageController::class);
    
    // CRUD Portfolio
    Route::resource('portfolios', PortfolioController::class);
    
    // CRUD Promo
    Route::resource('promotions', PromotionController::class);
    
    // CRUD Testimonial
    Route::resource('testimonials', TestimonialController::class);
    
    // CRUD FAQ
    Route::resource('faqs', FaqController::class);
    
    // Pengaturan (Kontak dsb)
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');
});
