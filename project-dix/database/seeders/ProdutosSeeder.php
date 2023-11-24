<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Produto::updateOrCreate([
        DB::table('produtos')->insert([
            [
                'name'          => 'Fonte de Notebook',
                'description'   => 'Fonte 110v Notebook Acer',
                'price'         => '170',
                'date_valid'    => '2025-10-10',
                'image'         => 'Caminho da imagem',
                'created_at'    => now(),
                'updated_at'    => now(),
                'user_id'       => '1',
            ],

            [
                'name'          => 'Fone HedHat',
                'description'   => 'Fone de ouvido Gamer',
                'price'         => '280',
                'date_valid'    => '2030-01-10',
                'image'         => 'Caminho da imagem',
                'created_at'    => now(),
                'updated_at'    => now(),
                'user_id'       => '1',
            ],

            [
                'name'          => 'Tela de Notebook',
                'description'   => 'Tela 14 polegadas touch',
                'price'         => '680',
                'date_valid'    => '2040-01-10',
                'image'         => 'Caminho da imagem',
                'created_at'    => now(),
                'updated_at'    => now(),
                'user_id'       => '1',
            ],

            [
                'name'          => 'Bag para Notebook',
                'description'   => 'Acessórios para notebook',
                'price'         => '300',
                'date_valid'    => '2025-09-10',
                'image'         => 'Caminho da imagem',
                'created_at'    => now(),
                'updated_at'    => now(),
                'user_id'       => '1',
            ],

            [
                'name'          => 'Óculos 3D',
                'description'   => 'Acessórios para notebook visual',
                'price'         => '375',
                'date_valid'    => '2027-12-10',
                'image'         => 'Caminho da imagem',
                'created_at'    => now(),
                'updated_at'    => now(),
                'user_id'       => '1',
            ]
        ]);
    }
}
