<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\MessagesController;

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

Route::get('/', [MessagesController::class, 'index'])->name('messages.index');
Route::get('/message/create', [MessagesController::class, 'create'])->name('message.create');
Route::post('/message/create', [MessagesController::class, 'store'])->name('message.store');
