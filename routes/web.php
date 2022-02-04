<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Mail\ProjectMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
})->name('home');
Route::get('/about-us', function () {
    return view('about');
})->name('about');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');

Route::post('send', [ContactController::class, 'send'])->name('send');
Route::post('new-project', [ServiceController::class, 'post'])->name('new-project');
