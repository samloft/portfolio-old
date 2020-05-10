<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
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

Auth::routes([
    'register' => false,
    'prefix' => 'cms',
]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('work', [WorkController::class, 'index'])->name('work');

Route::group(['prefix' => 'contact'], static function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});

Route::group(['prefix' => 'cms', 'middleware' => 'auth'], static function () {
    Route::get('/', [\App\Http\Controllers\Cms\HomeController::class, 'index'])->name('cms.home');

    Route::group(['prefix' => 'works'], static function () {
        Route::get('/', [\App\Http\Controllers\Cms\WorkController::class, 'index'])->name('cms.works');
        Route::get('create', [\App\Http\Controllers\Cms\WorkController::class, 'create'])->name('cms.works.create');
        Route::post('/', [\App\Http\Controllers\Cms\WorkController::class, 'store'])->name('cms.works.store');
        Route::get('edit/{work}', [\App\Http\Controllers\Cms\WorkController::class, 'edit'])->name('cms.works.edit');
        Route::patch('edit/{work}', [\App\Http\Controllers\Cms\WorkController::class, 'update'])->name('cms.works.update');
        Route::delete('{work}', [\App\Http\Controllers\Cms\WorkController::class, 'destroy'])->name('cms.works.destroy');
    });
});
