<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{

    public function apiServicos()
    {
        // retornando dados da api
        $urlAPI = 'http://localhost:3333/api/';

        $servicosAPI = Http::get($urlAPI . 'servicos')->json();
        $dataServicosAPI = array_reverse($servicosAPI['data']);

        //dd($data);

        for ($i = 0; $i < count($dataServicosAPI); $i++) {
            extract($dataServicosAPI[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $tipos[] = $tipo;
            $categorias[] = $categoria;
        }

        $content[] = [ 'namePage' => "Servicos"];

        //dd($content);


        return view('/servicos', [
            'ids' => $ids,
            'nomes' => $nomes,
            'tipos' => $tipos,
            'categorias' => $categorias,
            'content' => $content
        ]);
    }

    public function apiPacientes()
    {

        // retornando dados da api
        $urlAPI = 'http://localhost:3333/api/';

        $pacientesAPI = Http::get($urlAPI . 'pacientes')->json();
        $dataPacientesAPI = array_reverse($pacientesAPI['data']);

        //dd($data);

        for ($i = 0; $i < count($dataPacientesAPI); $i++) {
            extract($data[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cpfs[] = $cpf;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
            $tipos[] = $tipo;
        }

        return view('/pacientes', [
            // 'ids' => $ids,
            // 'nomes' => $nomes,
            // 'cpfs' => $cpfs,
            // 'telefones' => $telefones,
            // 'cidades' => $cidades,
            // 'tipos' => $tipos
        ]);
    }

    public function apiEspecialidades()
    {

        // retornando dados da api
        $urlAPI = 'http://localhost:3333/api/';

        $especialidadesAPI = Http::get($urlAPI . 'especialidades')->json();
        $dataEspecialidadesAPI = array_reverse($especialidadesAPI['data']);

        $profissionaisAPI = Http::get($urlAPI . 'profissionais')->json();
        $dataProfissionaisAPI = array_reverse($profissionaisAPI['data']);

        $clinicasAPI = Http::get($urlAPI . 'clinicas')->json();
        $dataClinicasAPI = array_reverse($clinicasAPI['data']);


        for ($i = 0; $i < count($dataEspecialidadesAPI); $i++) {
            extract($data[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cpfs[] = $cpf;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
            $tipos[] = $tipo;
        }

        return view('/pacientes', [
            // 'ids' => $ids,
            // 'nomes' => $nomes,
            // 'cpfs' => $cpfs,
            // 'telefones' => $telefones,
            // 'cidades' => $cidades,
            // 'tipos' => $tipos
        ]);
    }

    public function apiProfissionais()
    {

        // retornando dados da api
        $urlAPI = 'http://localhost:3333/api/';

        $profissionaisAPI = Http::get($urlAPI . 'profissionais')->json();
        $dataProfissionaisAPI = array_reverse($profissionaisAPI['data']);

        $clinicasAPI = Http::get($urlAPI . 'clinicas')->json();
        $dataClinicasAPI = array_reverse($clinicasAPI['data']);


        for ($i = 0; $i < count($dataProfissionaisAPI); $i++) {
            extract($data[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cpfs[] = $cpf;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
            $tipos[] = $tipo;
        }

        return view('/pacientes', [
            // 'ids' => $ids,
            // 'nomes' => $nomes,
            // 'cpfs' => $cpfs,
            // 'telefones' => $telefones,
            // 'cidades' => $cidades,
            // 'tipos' => $tipos
        ]);
    }


    public function apiClinicas()
    {

        // retornando dados da api
        $urlAPI = 'http://localhost:3333/api/';

        $clinicasAPI = Http::get($urlAPI . 'clinicas')->json();
        $dataClinicasAPI = array_reverse($clinicasAPI['data']);


        for ($i = 0; $i < count($dataClinicasAPI); $i++) {
            extract($data[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cpfs[] = $cpf;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
            $tipos[] = $tipo;
        }

        return view('/pacientes', [
            // 'ids' => $ids,
            // 'nomes' => $nomes,
            // 'cpfs' => $cpfs,
            // 'telefones' => $telefones,
            // 'cidades' => $cidades,
            // 'tipos' => $tipos
        ]);
    }
}
