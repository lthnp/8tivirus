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


Route::middleware(['coming.soon'])->group(function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});


Route::prefix('test')->group(function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/{code}', [App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');
    Route::post('/project/{code}/comment', [App\Http\Controllers\ProjectController::class, 'comment'])->name('comment.store');
    Route::post('/project/{code}/react', [App\Http\Controllers\ReactionController::class, 'store'])->name('react.store');
    Route::get('/project/{id}/react', [App\Http\Controllers\ReactionController::class, 'destroy'])->name('react.destroy');

    Route::get('/defender', [App\Http\Controllers\StudentController::class, 'index'])->name('defender.index');
    Route::get('/defender/{sid}-{nickname}', [App\Http\Controllers\StudentController::class, 'show'])->name('defender.show');

    Route::get('/supporter', [App\Http\Controllers\HomeController::class, 'supporter'])->name('supporter');
});


Route::prefix('cms')->group(function (){
    Route::get('/import', [App\Http\Controllers\ImportController::class, 'index'])->name('import');
    Route::post('import', [App\Http\Controllers\ImportController::class, 'import'])->name('import.select');
    Route::post('import/submit', [App\Http\Controllers\ImportController::class, 'importSubmit'])->name('import.submit');
});
