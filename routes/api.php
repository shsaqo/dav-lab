<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\ApiController;

Route::post('files-path', [ApiController::class, 'index']);
