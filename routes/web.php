<?php

use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\Auth;
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
Route::prefix('client')->group(function(){
    Route::get('/', [clientController::class, 'index'])->name('client.index');
    Route::prefix('cases')->group(function(){
        Route::get('/', [clientController::class, 'casesindex'])->name('client.cases');
        Route::get('/create', [clientController::class, 'create'])->name('client.cases.create');
        Route::post('/store', [clientController::class, 'store'])->name('client.cases.store');
    });
    Route::prefix('case-files')->group(function(){
        Route::get('/list/{id}', [clientController::class, 'casefiles'])->name('client.casefiles.list');
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');