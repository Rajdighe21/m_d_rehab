<?php

use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;




Route::get('/', [InformationController::class, 'index'])->name('index');
Route::post('/MailSend',[InformationController::class,'store'])->name('info.store');
