<?php

use App\Http\Controllers\AboutFc;
use App\Http\Controllers\AppointmentFc;
use App\Http\Controllers\BlogFc;
use App\Http\Controllers\ContactFc;
use App\Http\Controllers\FaqFc;
use App\Http\Controllers\GalleryFc;
use App\Http\Controllers\HomeFc;
use App\Http\Controllers\TreatmentFc;
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

Route::get('/', [HomeFc::class, 'index']);
Route::get('/about-us', [AboutFc::class, 'index']);
Route::get('/faq', [FaqFc::class, 'index']);
Route::get('/gallery', [GalleryFc::class, 'index']);
Route::get('/contact-us', [ContactFc::class, 'index']);

Route::get('/treatments', [TreatmentFc::class, 'index']);

Route::get('/blog', [BlogFc::class, 'index']);

Route::get('/appointment', [AppointmentFc::class, 'index']);
