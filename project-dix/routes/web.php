<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\PaicientesEvents;
use App\Http\Controllers\ServicosEvent;

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

    Route::get('/', [PaicientesEvents::class, 'dashboard'])->name('dashboard');
    // Rotas Serviços
    Route::get('/servicos', [ServicosEvent::class, 'servicos'])->name('servicos')->middleware('auth');
    Route::get('/events/createServico', [ServicosEvent::class, 'showCreate'])->name('showCreate')->middleware('auth');
    Route::post('/createServico', [ServicosEvent::class, 'store'])->name('store')->middleware('auth');
    Route::get('/events/deleteServico/{id}', [ServicosEvent::class, 'showDelete'])->name('showDelete')->middleware('auth');
    Route::delete('/events/delService/{id}', [ServicosEvent::class, 'destroy'])->name('destroy')->middleware('auth');
    Route::get('/events/editServico/{id}', [ServicosEvent::class, 'showEdit'])->name('showEdit')->middleware('auth');
    Route::put('/events/updateServico/{id}', [ServicosEvent::class, 'update'])->name('update')->middleware('auth');



    // Rotas Pacientes
    Route::get('/pacientes', [PaicientesEvents::class, 'pacientes'])->name('pacientes')->middleware('auth');
    Route::get('/events/createPaciente', [PaicientesEvents::class, 'showCreate'])->name('showCreate')->middleware('auth');
    Route::post('/createPaciente', [PaicientesEvents::class, 'store'])->name('store')->middleware('auth');
    Route::get('/events/deletePaciente/{id}', [PaicientesEvents::class, 'showDelete'])->name('showDelete')->middleware('auth');
    Route::delete('/events/{id}', [PaicientesEvents::class, 'destroy'])->name('destroy')->middleware('auth');
    Route::get('/events/editPaciente/{id}', [PaicientesEvents::class, 'showEdit'])->name('showEdit')->middleware('auth');
    Route::put('/events/update/{id}', [PaicientesEvents::class, 'update'])->name('update')->middleware('auth');




    // Rota relatório PDF
    Route::get('pdf', [PdfController::class, 'geraPdf']);

    // Relatório PDF
    Route::get('/pdf', [PdfController::class, 'geraPdf']);
    Route::get('/relatorios', [PdfController::class, 'relatorios'])->name('relatorios')->middleware('auth');
    Route::get('/relatorios/visualizar', [PdfController::class, 'visualizar'])->name('visualizar')->middleware('auth');
    Route::get('/relatorios/imprimir', [PdfController::class, 'imprimir'])->name('imprimir')->middleware('auth');


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
