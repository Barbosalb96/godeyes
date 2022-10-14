<?php

use App\Http\Controllers\AppsController as AppsController;
use App\Http\Controllers\BlockController as BlockController;
use App\Http\Controllers\CalledController as CalledController;
use App\Http\Controllers\ContatoController as ContatoController;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\LocalizationController as LocalizationController;
use App\Http\Controllers\MidiaController as MidiaController;
use App\Http\Controllers\HistorysController as HistorysController;
use App\Http\Controllers\RedesController as RedesController;
use App\Http\Controllers\MessageController as MessageController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('apps')->middleware('auth')->group(function () {
    Route::get('/', [AppsController::class, 'index'])->name('apps');
});

Route::prefix('contatos')->middleware('auth')->group(function () {
    Route::get('/', [ContatoController::class, 'index'])->name('contatos');
    Route::get('/detalhe/{id?}', [ContatoController::class, 'detail'])->name('contato_detail');

});

Route::prefix('chamadas')->middleware('auth')->group(function () {
    Route::get('/', [CalledController::class, 'index'])->name('chamadas');
});

Route::prefix('midia')->middleware('auth')->group(function () {
    Route::get('/fotos', [MidiaController::class, 'indexPhoto'])->name('fotos');
    Route::get('/video', [MidiaController::class, 'indexVideo'])->name('videos');
});


Route::prefix('bloquear')->middleware('auth')->group(function () {
    Route::get('/app', [BlockController::class, 'indexApps'])->name('app');
    Route::get('/site', [BlockController::class, 'indexsite'])->name('site');
    Route::get('/wifi', [BlockController::class, 'indexWifi'])->name('wifi');
});

Route::prefix('internet')->middleware('auth')->middleware('auth')->group(function () {
    Route::get('/historico', [HistorysController::class, 'indexHistorico'])->name('historico');
    Route::get('/favoritos', [HistorysController::class, 'indexFavoritos'])->name('favoritos');
    Route::get('/email', [HistorysController::class, 'indexEmail'])->name('email');
});

Route::prefix('redes')->middleware('auth')->group(function () {
    Route::get('/', [RedesController::class, 'index'])->name('redes');
});

Route::prefix('message')->middleware('auth')->group(function () {
    Route::get('/', [MessageController::class, 'index'])->name('message');
});

Route::prefix('localizacao')->middleware('auth')->group(function () {
    Route::get('/', [LocalizationController::class, 'index'])->name('localizacao');
    Route::get('/localizacaoGeo', [LocalizationController::class, 'locationGeo'])->name('locationGeo');
});


Route::get('/monitoramento-palavra', [App\Http\Controllers\ContatoController::class, 'monitoramento'])->name('monitoramento');

Route::get('/screenrecorder', [MidiaController::class, 'screenrecorder'])->name('screenrecorder');






