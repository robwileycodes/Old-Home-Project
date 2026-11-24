<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegistrationApprovalController;

Route::get('/', function () {
    return view('template');
});

Route::get('/registration-approval', [RegistrationApprovalController::class, 'index']);