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

Route::prefix('dttot')
->middleware('auth')
->group(function()
{
    Route::get('/', [DttotController::class, 'index'])->name('dttot.index');
    Route::post('/', [DttotController::class, 'upload'])->name('dttot.upload');
    Route::get('/delete', [DttotController::class, 'delete'])->name('dttot.delete');
    Route::get('/rekap', [DttotController::class, 'rekap'])->name('dttot.rekap');
});


Route::prefix('sipendar')
->middleware('auth')
->group(function()
{
    Route::get('/', [SipendarController::class, 'index'])->name('sipendar.index');
    Route::post('/', [SipendarController::class, 'upload'])->name('sipendar.upload');
    Route::get('/delete', [SipendarController::class, 'delete'])->name('sipendar.delete');  
});


Route::prefix('dppspm')
->middleware('auth')
->group(function ()
{
    Route::get('/', [DppspmController::class, 'index'])->name('dppspm.index');
    Route::post('/', [DppspmController::class, 'upload'])->name('dppspm.upload');
    Route::get('/delete', [DppspmController::class, 'delete'])->name('dppspm.delete');
});


Route::prefix('newsletter')
->middleware('auth')
->group(function ()
{
    Route::get('/', [NewsletterController::class, 'index'])->name('aml.index');
    Route::post('/', [NewsletterController::class, 'upload'])->name('aml.upload');
    Route::get('/delete', [NewsletterController::class, 'delete'])->name('aml.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
