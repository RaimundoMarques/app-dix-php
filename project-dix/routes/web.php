<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\PaicientesEvents;
use App\Http\Controllers\ProdutosEvent;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Rotas Serviços
    Route::get('/produtos', [ProdutosEvent::class, 'produtos'])->name('produtos')->middleware('auth');
    Route::get('/events/createProduto', [ProdutosEvent::class, 'showCreate'])->name('showCreate')->middleware('auth');
    Route::post('/createProduto', [ProdutosEvent::class, 'store'])->name('store')->middleware('auth');
    Route::get('/events/deleteProduto/{id}', [ProdutosEvent::class, 'showDelete'])->name('showDelete')->middleware('auth');
    Route::delete('/events/delService/{id}', [ProdutosEvent::class, 'destroy'])->name('destroy')->middleware('auth');
    Route::get('/events/editProduto/{id}', [ProdutosEvent::class, 'showEdit'])->name('showEdit')->middleware('auth');
    Route::put('/events/updateProduto/{id}', [ProdutosEvent::class, 'update'])->name('update')->middleware('auth');



    // Rotas Pacientes
    Route::get('/', [PaicientesEvents::class, 'dashboard'])->name('dashboard');
    Route::get('/pacientes', [PaicientesEvents::class, 'pacientes'])->name('pacientes')->middleware('auth');
    Route::get('/events/createPaciente', [PaicientesEvents::class, 'showCreate'])->name('showCreate')->middleware('auth');
    Route::post('/createPaciente', [PaicientesEvents::class, 'store'])->name('store')->middleware('auth');
    Route::get('/events/deletePaciente/{id}', [PaicientesEvents::class, 'showDelete'])->name('showDelete')->middleware('auth');
    Route::delete('/events/{id}', [PaicientesEvents::class, 'destroy'])->name('destroy')->middleware('auth');
    Route::get('/events/editPaciente/{id}', [PaicientesEvents::class, 'showEdit'])->name('showEdit')->middleware('auth');
    Route::put('/events/update/{id}', [PaicientesEvents::class, 'update'])->name('update')->middleware('auth');




    // Rota relatório PDF
    // Route::get('pdf', [PdfController::class, 'geraPdf']);

    // Relatório PDF
    Route::get('/pdf', [PdfController::class, 'geraPdf']);
    Route::get('/relatorios', [PdfController::class, 'relatorios'])->name('relatorios')->middleware('auth');
    Route::get('/relatorios/visualizar', [PdfController::class, 'visualizar'])->name('visualizar')->middleware('auth');
    Route::get('/relatorios/imprimir', [PdfController::class, 'imprimir'])->name('imprimir')->middleware('auth');


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
