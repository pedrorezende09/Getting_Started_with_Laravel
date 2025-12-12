<?php

use App\Http\Controllers\ChirpController;

Route::get('/', [ChirpController::class, 'index']);
