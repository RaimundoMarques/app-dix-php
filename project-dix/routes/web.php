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
use App\Http\Controllers\NoticiasController;
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
Route::get('/', [IndexController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/servicos', [ServicosController::class, 'servicos']);
Route::get('/pacientes', [PacientesController::class, 'pacientes']);
Route::get('/especialidades', [EspecialidadeController::class, 'especialidades']);
Route::get('/profissionais', [ProfissionaisController::class, 'profissionais']);
Route::get('/clinicas', [ClinicasController::class, 'clinicas']);
Route::get('/clinicasServicos', [ClinicasServicosController::class, 'clinicasServicos']);