<?php

use App\Http\Controllers\InvitationShowController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Livewire\Admin\Templates\Form;
use App\Livewire\Admin\Templates\Index;


Route::get('/templates', Index::class)
    ->name('templates.index');

Route::get('/templates/create', Form::class)
    ->name('templates.create');

Route::get('/templates/{template}/edit', Form::class)
    ->name('templates.edit');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('invite/{slug}', [InvitationShowController::class, 'index'])->name('invite.index');

require __DIR__.'/auth.php';
