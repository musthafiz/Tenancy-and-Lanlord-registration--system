<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantsController;
use App\Http\Controllers\LandlordController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/about', function () {
    return view('about');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/', function () {
    return view('index');
});


Route::get('/tenants', [TenantsController::class, 'index']);

Route::post('/submit', [tenantsController::class, 'store'])->name('form.formsubmit');
Route::get('/landlord', [LandlordController::class, 'index']);
Route::post('/register', [LandlordController::class, 'store'])->name('register.tenant');

