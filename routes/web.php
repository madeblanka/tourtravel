<?php

use App\Http\Controllers\Activities;
use App\Http\Controllers\Contact;
use App\Http\Controllers\DetailPakage;
use App\Http\Controllers\Fullday;
use App\Http\Controllers\Gallery;
use App\Http\Controllers\Half;
use App\Http\Controllers\Pakage;
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


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/fullday', [Fullday::class, 'fullDayTour'])->name('fullday');
Route::get('/half', [Half::class, 'halfDayTour'])->name('half');
Route::get('/pakage', [Pakage::class, 'pakageTour'])->name('pakage');
Route::get('/activities', [Activities::class, 'activities'])->name('activities');
Route::get('/gallery', [Gallery::class, 'gallery'])->name('gallery');
Route::get('/contact', [Contact::class, 'contact'])->name('contact');
Route::get('/detailpakage', [DetailPakage::class, 'detailpakage'])->name('detailpakage');
