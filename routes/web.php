<?php

use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\Theme\ThemeController;
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

Route::get('/themeSelect', function () {
    return view('theme.index');
})->middleware(['auth'])->name('themeSelect');

require __DIR__.'/auth.php';

// Start Theme Controller
Route::namespace('/Theme')
    ->prefix('/theme')
    ->middleware(['auth'])
    ->group(function() {

        Route::group([
            'as' => 'theme.',
        ], function() {
            Route::get('/form', [ThemeController::class, 'index'])->name('index');
            Route::post('/store', [ThemeController::class, 'store'])->name('store');
        });

    });
// End Theme Controller

// Start Form Controller
Route::namespace('/Form')
    ->prefix('/form')
    ->middleware(['auth'])
    ->group(function() {

        Route::group([
            'as' => 'form.',
        ], function() {
            Route::post('/store', [FormController::class, 'store'])->name('store');
        });

    });
// End Form Controller
