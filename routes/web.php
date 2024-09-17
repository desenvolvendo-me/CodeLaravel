<?php

use App\Http\Controllers\HelloController;

Route::get('/', [HelloController::class, 'index']);

