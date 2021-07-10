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


Route::middleware(['coming.soon'])->prefix('')->group(function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
    Route::get('/insider', [App\Http\Controllers\HomeController::class, 'insider'])->name('insider');
    Route::get('/looking-for', [App\Http\Controllers\HomeController::class, 'lookingFor'])->name('looking');

    Route::prefix('projects')->group(function (){
        Route::get('/', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
        Route::get('/{code}', [App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');
        // COMMENT
        Route::post('/{code}/comment', [App\Http\Controllers\ProjectController::class, 'comment'])->name('comment.store');
        Route::post('/{code}/no-comment', [App\Http\Controllers\ProjectController::class, 'noComment'])->name('no.comment');
        // REACT
        Route::post('/{code}/react', [App\Http\Controllers\ReactionController::class, 'store'])->name('react.store');
        Route::get('/{id}/react', [App\Http\Controllers\ReactionController::class, 'destroy'])->name('react.destroy');
    });

    Route::prefix('defenders')->group(function (){
        Route::get('/', [App\Http\Controllers\StudentController::class, 'index'])->name('defender.index');
        Route::get('/{sid}-{nickname}', [App\Http\Controllers\StudentController::class, 'show'])->name('defender.show');
    });

    Route::prefix('looking-for')->group(function (){
        Route::get('/', [App\Http\Controllers\LookingController::class, 'index'])->name('looking.index');
    });

    Route::prefix('free-resource')->group(function (){
        Route::get('/', [App\Http\Controllers\FreeResourceController::class, 'index'])->name('resource.index');
        Route::get('/download', [App\Http\Controllers\FreeResourceController::class, 'getDownload'])->name('resource.download');
    });
});


//Route::prefix('test')->group(function (){
//    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
//    Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
//    Route::get('/insider', [App\Http\Controllers\HomeController::class, 'insider'])->name('insider');
//
//    Route::prefix('defenders')->group(function (){
//        Route::get('/', [App\Http\Controllers\StudentController::class, 'index'])->name('defender.index');
//        Route::get('/{sid}-{nickname}', [App\Http\Controllers\StudentController::class, 'show'])->name('defender.show');
//    });
//
//    Route::prefix('free-resource')->group(function (){
//        Route::get('/', [App\Http\Controllers\FreeResourceController::class, 'index'])->name('resource.index');
//        Route::get('/download', [App\Http\Controllers\FreeResourceController::class, 'getDownload'])->name('resource.download');
//    });
//
//});


//Route::prefix('cms')->group(function (){
//    Route::get('/import', [App\Http\Controllers\ImportController::class, 'index'])->name('import');
//    Route::post('import', [App\Http\Controllers\ImportController::class, 'import'])->name('import.select');
//    Route::post('import/submit', [App\Http\Controllers\ImportController::class, 'importSubmit'])->name('import.submit');
//});
