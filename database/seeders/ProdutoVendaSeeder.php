<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoVendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto_vendas')->insert([
            'produto_id' => 1,
            'venda_id' => 1,
        ]);

        DB::table('produto_vendas')->insert([
            'produto_id' => 1,
            'venda_id' => 2,
        ]);
    }
}
