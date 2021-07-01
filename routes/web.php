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

Route::get('/', function () {
    return view('pages.detail-person');
});

Route::prefix('cms')->group(function (){
    Route::get('/import', [App\Http\Controllers\ImportController::class, 'index'])->name('import');
    Route::post('import', [App\Http\Controllers\ImportController::class, 'import'])->name('import.select');
    Route::post('import/submit', [App\Http\Controllers\ImportController::class, 'importSubmit'])->name('import.submit');
});
