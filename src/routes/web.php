<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/confirm', function () {
    return redirect()->route('contacts.index');
});
Route::post('/confirm',[ContactController::class, 'confirm'])->name('contacts.confirm');
Route::post('/thanks', [ContactController::class, 'send'])->name('contacts.send');
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');