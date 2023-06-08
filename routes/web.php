<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumenController;


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


//Merger
Route::get('/merger',[DokumenController::class,'uploadpage'])->name('uploadpage');
Route::post('/merger',[DokumenController::class,'store'])->name('uploadedfile.store');
Route::get('/merger1',[DokumenController::class,'merger'])->name('mergefile');

Route::get('/merger',[DokumenController::class,'show'])->name('uploadedfile.show');
Route::get('/merger-view/{id}',[DokumenController::class,'view'])->name('uploadedfile.view');


//Progress
Route::get('/progress', function () {
    return view('progress.main');
});
