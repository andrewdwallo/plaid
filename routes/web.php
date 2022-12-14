<?php

use App\Http\Livewire\Users\Detail;
use App\Http\Livewire\Plaid;
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
});

Route::get('/', Plaid::class)->name('plaid');
Route::get('/users/{user:id}/items', Detail::class)->name('userItems');


