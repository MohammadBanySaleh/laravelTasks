<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::post('/submit-form', [Test::class, 'handleFormSubmission'])->name('submit-form');
Route::get('/success-page', [Test::class, 'showSuccessPage'])->name('success-page');

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/home', [Test::class, 'myFunction']);
// Route::view('/', 'home');
