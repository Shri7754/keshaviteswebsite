<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectBookingController;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/quote', [PageController::class, 'quote'])->name('quote');
Route::get('/founder-profile', [PageController::class, 'founderProfile'])->name('founder.profile');
Route::get('/ashish-profile', [PageController::class, 'ashishProfile'])->name('ashish.profile');
Route::get('/sanjay-profile', [PageController::class, 'sanjayProfile'])->name('sanjay.profile');
Route::get('/solutions/web-development/pulse-clinic', [PageController::class, 'pulseClinicProject'])->name('pulse-clinic.project');
Route::get('/solutions/mobile-applications', [PageController::class, 'mobileApplications'])->name('mobile-applications');

// Contact Form Routes
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Chatbot Project Booking Routes
Route::get('/api/booking/services', [ProjectBookingController::class, 'getServices'])->name('booking.services');
Route::post('/api/booking/store', [ProjectBookingController::class, 'store'])->name('booking.store');
