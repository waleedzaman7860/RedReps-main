<?php

use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Route::get('/services/{page}', [HomeController::class, 'array'])->name('services/page');



Route::get('/services/{page}', [HomeController::class, 'array'])->name('services');


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::view('/pricing', 'welcome');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/term-of-use', function () {
    return view('term-of-use');
})->name('term-of-use');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/career', function () {
    return view('career');
})->name('career');

Route::post('/submit-career-form', [HomeController::class, 'store'])->name('submitCareerForm');

Route::post('/submit-contact-form', [HomeController::class, 'contact_store'])->name('submitContactForm');

// Route::get('chart', [ChartJSController::class, 'index']);
Route::get('/admin', [ChartJSController::class, 'index'])->name('admin-index');
// Route::get('/admin/invoice', [ChartJSController::class, 'view'])->name('invoice');

// routes/web.php
Route::get('/admin/invoice', [InvoiceController::class, 'index'])->name('admin.invoice');

// Route::get('/admin/invoice', function () {
//     return view('admin.invoice');
// });


// Route::get('/admin', function () {
//     return view('admin.admin-index');
// })->name('admin-index');


Route::get('/test', function () {
    return view('src.index');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
