<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MolyController;

use App\Http\Controllers\PagesController;

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

//Index page
Route::get('/', [PagesController::class, 'index']);


//Moly Engine Scrapper

//**Linkedin**//
Route::get('/linkedin', [MolyController::class, 'linkedin']);
