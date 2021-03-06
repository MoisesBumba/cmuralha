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
use App\Http\Controllers\{
    SiteController,
    PainelController,
    BannerController,
    AboutController,
    ServiceController,
    DoctorController,
    ContactController
    
};

/*************************************************************
 * Rotas Painel
 *************************************************************/
Route::middleware(['auth'])->group(function(){
    Route::get('/painel', [PainelController::class, 'index'] );
    Route::resource('/painel/banner', BannerController::class ); 
    Route::resource('/painel/sobre', AboutController::class ); 
    Route::resource('/painel/servicos', ServiceController::class ); 
    Route::resource('/painel/doctor', DoctorController::class ); 
    Route::resource('/painel/contact', ContactController::class); 
});
/*************************************************************
 * End Routes Rota Painel
 *************************************************************/



/************************************************************
 * Routes Site
 *************************************************************/


Route::get('/', [SiteController::class, 'index']);

/*************************************************************
 * End Routes Site
 *************************************************************/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
