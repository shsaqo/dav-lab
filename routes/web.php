<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsFreshController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnalysisCategoryController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\LocaleController;

require __DIR__.'/auth.php';
Route::get('/queue-restart', function () {
    \Illuminate\Support\Facades\Artisan::call('queue:restart');
    dd('queue restart');
});

Route::get('/cache-clear', function () {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    dd('cache clear');
});

Route::get('/cache', function () {
    \Illuminate\Support\Facades\Artisan::call('view:cache');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('route:cache');
    dd('cache');
});

Route::get('/queue-work', function () {
    \Illuminate\Support\Facades\Artisan::call('queue:work');
    dd('queue run');
});

Route::get('/call-migrate', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate');
    dd('migrate');
});

Route::get('/php-v', function () {
    phpinfo();
});
Route::get('/lang/{locale}', [LocaleController::class, 'setLocale'])->name('lang');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    Route::resource('/home-slider', HomeSliderController::class, ['except' => [ 'show' ]]);
    Route::resource('/news', NewsFreshController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/analysis-category', AnalysisCategoryController::class);
    Route::resource('/direction', DirectionController::class);
    Route::view('support', 'admin.support')->name('support.index');
    Route::put('/prompt-text', [AnalysisCategoryController::class, 'promptText'])->name('promptText');
    Route::get('/element/{category}', [ElementController::class, 'index'])->name('element.index');
    Route::post('/element/{category}', [ElementController::class, 'store'])->name('element.store');
    Route::get('/element/{category}/edit', [ElementController::class, 'edit'])->name('element.edit');
    Route::put('/element/{category}', [ElementController::class, 'update'])->name('element.update');
    Route::delete('/element/{category}', [ElementController::class, 'destroy'])->name('element.destroy');
});

Route::group([
    'prefix' => \App\Services\Localization\LocalizationServices::locale(),
    'middleware' => 'setLocale'
], function (){
    Route::get('/', [IndexController::class, 'index'])->name('home.page');
    Route::get('/news', [IndexController::class, 'news'])->name('news.page');
    Route::get('/about', [IndexController::class, 'about'])->name('about.page');
    Route::get('/price', [IndexController::class, 'price'])->name('price');
    Route::get('/paper-page', [IndexController::class, 'paperPage'])->name('paper-page');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
    Route::get('/covid-19', [IndexController::class, 'covid'])->name('covid');
    Route::get('/download', [IndexController::class, 'download'])->name('download');
    Route::get('/news/{url}', [IndexController::class, 'sing'])->name('sing');
    Route::fallback([IndexController::class, 'nonFound']);
});








