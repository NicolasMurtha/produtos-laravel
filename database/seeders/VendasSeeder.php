<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendas')->insert([
            'nome' => 'joão'
        ]);

        DB::table('vendas')->insert([
            'nome' => 'Paulo'
        ]);
    }
}
