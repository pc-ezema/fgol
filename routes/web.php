<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/about-us', [HomePageController::class, 'aboutUs'])->name('about-us');
Route::get('/our-operations', [HomePageController::class, 'ourOperations'])->name('our-operations');
Route::get('/sustainability', [HomePageController::class, 'sustainability'])->name('sustainability');
Route::get('/innovation-technology', [HomePageController::class, 'innovationTechnology'])->name('innovation-technology');
Route::get('/investor-relations', [HomePageController::class, 'investorRelations'])->name('investor-relations');
Route::get('/news-media', [HomePageController::class, 'newsMedia'])->name('news-media');
Route::get('/careers', [HomePageController::class, 'careers'])->name('careers');
Route::get('/contact-us', [HomePageController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-submit', [HomePageController::class, 'submit']);
