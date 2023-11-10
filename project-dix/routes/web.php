<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Symfony\Component\VarDumper\VarDumper;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ClinicasController;
use App\Http\Controllers\ClinicasServicosController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\ProfissionaisController;
use App\Http\Controllers\ServicosController;

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

// Métodos GET
Route::get('/', [IndexController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/servicos', [ApiController::class, 'apiServicos']);



Route::get('/especialidades', [EspecialidadeController::class, 'especialidades']);
Route::get('/profissionais', [ProfissionaisController::class, 'profissionais']);
Route::get('/clinicas', [ClinicasController::class, 'clinicas']);
Route::get('/clinicasServicos', [ClinicasServicosController::class, 'clinicasServicos']);

// Rotas Paciente
Route::get('/pacientes', [ApiController::class, 'api']);
Route::get('/events/createPaciente', [PacientesController::class, 'create']);
Route::get('/events/deletePaciente/{id}', [PacientesController::class, 'showDelete']);
Route::get('/events/{id}', [PacientesController::class, 'show']);
Route::get('/events/showPaciente/{id}', [PacientesController::class, 'showEdit']);
Route::get('/events/edit/{id}', [PacientesController::class, 'edit']);
Route::put('/events/update/{id}', [PacientesController::class, 'update'])->middleware('auth');
Route::post('/events', [PacientesController::class, 'store']);
Route::delete('/events/{id}', [PacientesController::class, 'destroy']);