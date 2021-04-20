<?php

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
use App\Http\Controllers\WarningsController;
use App\Warning;


Route::get('/', function () {
	$warnings = Warning::all();
    return view('welcome', ['warnings' => $warnings]);
})->middleware('auth');

Route::get('/warnings', [WarningsController::class, 'create'])->middleware('auth');
Route::post('/warnings/create', [WarningsController::class, 'store'])->middleware('auth');
Route::get('/warnings/show/{id}', [WarningsController::class, 'show'])->middleware('auth');
Route::delete('/warnings/{id}', [WarningsController::class, 'destroy'])->middleware('auth');


Route::get('/dashboard', [WarningsController::class, 'dashboard'])->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

