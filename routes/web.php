<?php

use App\Models\Trip;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apitripsummary;
use App\Http\Controllers\apisearchresults;
use App\Http\Controllers\passengerdetails;

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
Route::get('/', [apisearchresults::class, 'results'])->name('results');

Route::get('/tripsummary', [apitripsummary::class, 'trip'])->name('trip');


Route::get('/passenger/details', [passengerdetails::class, 'index']);
Route::post('/passenger/details', [passengerdetails::class, 'sendrequest'])->name('passenger');


