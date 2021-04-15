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
});

Route::get('/warnings', [WarningsController::class, 'create']);
Route::post('/warnings/create', [WarningsController::class, 'store']);
