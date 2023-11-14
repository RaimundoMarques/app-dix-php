<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\UsersEvents;
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

    Route::get('/', [UsersEvents::class, 'index'])->name('index');
    // Rotas Serviços
    Route::get('/servicos', [ServicosEvent::class, 'index'])->name('index')->middleware('auth');
    Route::get('/events/createServico', [ServicosEvent::class, 'showCreate'])->name('showCreate')->middleware('auth');
    Route::post('/events/createServico', [ServicosEvent::class, 'store'])->name('store')->middleware('auth');
    Route::get('/events/deleteServico/{id}', [ServicosEvent::class, 'showDelete'])->name('showDelete')->middleware('auth');
    Route::delete('/events/delService/{id}', [ServicosEvent::class, 'destroy'])->name('destroy')->middleware('auth');
    Route::get('/events/editServico/{id}', [ServicosEvent::class, 'showEdit'])->name('showEdit')->middleware('auth');
    Route::put('/events/updateServico/{id}', [ServicosEvent::class, 'update'])->name('update')->middleware('auth');



    // Rotas Pacientes
    Route::get('/events/editPaciente/{id}', [UsersEvents::class, 'showEdit'])->name('showEdit')->middleware('auth');
    Route::get('/events/createPaciente', [UsersEvents::class, 'showCreate'])->name('showCreate')->middleware('auth');
    Route::get('/pacientes', [UsersEvents::class, 'pacientes'])->name('pacientes')->middleware('auth');
    Route::get('/events/deletePaciente/{id}', [UsersEvents::class, 'showDelete'])->name('showDelete')->middleware('auth');
    Route::delete('/events/{id}', [UsersEvents::class, 'destroy'])->name('destroy')->middleware('auth');
    Route::post('/events', [UsersEvents::class, 'store'])->name('store')->middleware('auth');
    Route::put('/events/update/{id}', [UsersEvents::class, 'update'])->name('update')->middleware('auth');



    // Relatório PDF
    Route::get('/pdf', [PdfController::class, 'geraPdf']);
    Route::get('/relatorios', [PdfController::class, 'relatorios'])->name('relatorios')->middleware('auth');
    Route::get('/relatorios/visualizar', [PdfController::class, 'visualizar'])->name('visualizar')->middleware('auth');
    Route::get('/relatorios/imprimir', [PdfController::class, 'imprimir'])->name('imprimir')->middleware('auth');



    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
