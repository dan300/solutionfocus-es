<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Language switcher
Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'es'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('language.switch');

// Routes without locale prefix (defaults to English from session)
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');

// Localized routes with prefix
Route::prefix('{locale}')->where(['locale' => 'en|es'])->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home.locale');
    Route::get('/contact', [ContactController::class, 'show'])->name('contact.locale');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit.locale');
    Route::get('/{slug}', [PageController::class, 'show'])->name('page.show.locale');
});
