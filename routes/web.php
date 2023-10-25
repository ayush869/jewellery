<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\languageController;
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


Route::get('lang-home', [languageController::class, 'index'])->name('lang');
Route::get('lang-change', [languageController::class, 'change'])->name('lang-change');
// Route::get('/', [languageController::class, 'lang_index'])->name('lang-home-1');
// Route::get('locale/{lang}', [languageController::class, 'lang_change'])->name('select-language');
Route::get('/greeting', function () {
    return view('language.about');
})->name('about-us');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/astrology', function () {
    return view('astrology');
})->name('astrology');





Route::get('/home', function () {
    return view('home');
})->name('home');
