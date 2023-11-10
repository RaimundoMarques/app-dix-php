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

        $namePage = "Serviços";

        //dd($content);


        return view('/servicos', [
            'ids' => $ids,
            'nomes' => $nomes,
            'tipos' => $tipos,
            'categorias' => $categorias,
            'namePage' => $namePage
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
            extract($dataPacientesAPI[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cpfs[] = $cpf;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
            $tipos[] = $tipo;
        }

        return view('/pacientes', [
            'ids' => $ids,
            'nomes' => $nomes,
            'cpfs' => $cpfs,
            'telefones' => $telefones,
            'cidades' => $cidades,
            'tipos' => $tipos
        ]);
    }

    public function apiEspecialidades()
    {

        // retornando dados da api
        $urlAPI = 'http://localhost:3333/api/';

        $especialidadesAPI = Http::get($urlAPI . 'especialidades')->json();
        $dataEspecialidadesAPI = array_reverse($especialidadesAPI['data']);

        for ($i = 0; $i < count($dataEspecialidadesAPI); $i++) {
            extract($dataEspecialidadesAPI[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $datacriacaos[] = $datacriacao;
            $dataatualizacaos[] = $dataatualizacao;
        }

        $namePage = "Especialidades";

        return view('/especialidades', [
            'ids' => $ids,
            'nomes' => $nomes,
            'datacriacaos' => $datacriacaos,
            'dataatualizacaos' => $dataatualizacaos,
            'namePage' => $namePage
        ]);
    }

    public function apiProfissionais()
    {

        // retornando dados da api
        $urlAPI = 'http://localhost:3333/api/';

        $profissionaisAPI = Http::get($urlAPI . 'profissionais')->json();
        $dataProfissionaisAPI = array_reverse($profissionaisAPI['data']);


        for ($i = 0; $i < count($dataProfissionaisAPI); $i++) {
            extract($dataProfissionaisAPI[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cpfs[] = $cpf;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
        }

        $namePage = "Profissionais";

        return view('/profissionais', [
            'ids' => $ids,
            'nomes' => $nomes,
            'cpfs' => $cpfs,
            'telefones' => $telefones,
            'cidades' => $cidades,
            'namePage' => $namePage
        ]);
    }


    public function apiClinicas()
    {

        // retornando dados da api
        $urlAPI = 'http://localhost:3333/api/';

        $clinicasAPI = Http::get($urlAPI . 'clinicas')->json();
        $dataClinicasAPI = array_reverse($clinicasAPI['data']);


        for ($i = 0; $i < count($dataClinicasAPI); $i++) {
            extract($dataClinicasAPI[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cnpjs[] = $cnpj;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
        }

        $namePage = "Clínicas";

        return view('/clinicas', [
            'ids' => $ids,
            'nomes' => $nomes,
            'cnpjs' => $cnpjs,
            'telefones' => $telefones,
            'cidades' => $cidades,
            'namePage' => $namePage
        ]);
    }
}
