<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

Route::get('/', function () {
    return view('mentenanta');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/florin&gabriela', [InvitationController::class, 'index'])->name('invitation.index');
Route::post('/rsvp', [InvitationController::class, 'storeRsvp'])->name('invitation.rsvp');
Route::get('/admin', [InvitationController::class, 'admin'])->middleware('auth')->name('invitation.admin');








Auth::routes();