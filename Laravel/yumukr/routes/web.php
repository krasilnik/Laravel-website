
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YumUkrController;

Route::get('/', [YumUkrController::class, 'showLanding']);
Route::get('/city', [YumUkrController::class, 'showCity']);
Route::get('/restaurant', [YumUkrController::class, 'showRestaurant']);
Route::get('/contact', [YumUkrController::class, 'showContacts']);
Route::get('/array', [YumUkrController::class, 'showArray']);
