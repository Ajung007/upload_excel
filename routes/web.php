<?php

use App\Http\Controllers\DppspmController;
use App\Http\Controllers\DttotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SipendarController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/dttot', [DttotController::class, 'index'])->name('dttot.index');
Route::post('/dttot', [DttotController::class, 'upload'])->name('dttot.upload');
Route::get('/dttot/delete', [DttotController::class, 'delete'])->name('dttot.delete');

Route::get('/sipendar', [SipendarController::class, 'index'])->name('sipendar.index');
Route::post('/sipedar', [SipendarController::class, 'upload'])->name('sipendar.upload');
Route::get('/sipedar/delete', [SipendarController::class, 'delete'])->name('sipendar.delete');

Route::get('/dppspm', [DppspmController::class, 'index'])->name('dppspm.index');
Route::post('/dppspm', [DppspmController::class, 'upload'])->name('dppspm.upload');
Route::get('/dppspm/delete', [DppspmController::class, 'delete'])->name('dppspm.delete');

Route::get('/newsletter', [NewsletterController::class, 'index'])->name('aml.index');
Route::post('/newsleter', [NewsletterController::class, 'upload'])->name('aml.upload');
Route::get('/newsleter/delete', [NewsletterController::class, 'delete'])->name('aml.delete');