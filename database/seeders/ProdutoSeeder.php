<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Pneu',
            'tipo' => 'acessorios carro',
            'estoque' => 30,
            'cod_id' => 1,
            'setor_id' =>3,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'banana',
            'tipo' => 'fruta',
            'estoque' => 30,
            'cod_id' => 2,
            'setor_id' =>1,
        ]);
    }
}
