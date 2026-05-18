<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RempahController;

Route::get('/', [RempahController::class, 'index']);