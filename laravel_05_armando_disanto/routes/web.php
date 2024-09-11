<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get("/contattaci", [PublicController::class, "contactUs"])->name('contact.us');
Route::get("/categorie", [PublicController::class, "categorie"])->name('categorie');
Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');
