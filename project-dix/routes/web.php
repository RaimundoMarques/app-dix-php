<?php

use App\Http\Controllers\UsersEvents;
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
    Route::get('/servicos', [UsersEvents::class, 'servicos'])->name('servicos');


    // Rotas Pacientes
    Route::get('/events/editPaciente/{id}', [UsersEvents::class, 'showEdit']);
    Route::get('/events/createPaciente', [UsersEvents::class, 'showCreate']);
    Route::get('/pacientes', [UsersEvents::class, 'pacientes'])->name('pacientes');
    Route::get('/events/deletePaciente/{id}', [UsersEvents::class, 'showDelete']);
    Route::delete('/events/{id}', [UsersEvents::class, 'destroy']);
    Route::post('/events', [UsersEvents::class, 'store'])->middleware('auth');
    Route::put('/events/update/{id}', [UsersEvents::class, 'update']);
    

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
