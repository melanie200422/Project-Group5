<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FE\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{slug}', [HomeController::class, 'productDetails'])
        ->name('productDetails');





<<<<<<< HEAD
=======
Route::get('/', function () {
    return view('welcome'); DFDHJHDEG
});
>>>>>>> a71bf3e8e4a57c688b86289a7542ffb38894b41b
