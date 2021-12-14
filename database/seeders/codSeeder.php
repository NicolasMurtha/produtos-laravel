<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class codSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cod')->insert([
            'numero' => 1,
            'nome' => 'biruleibe',
        ]);

        DB::table('cod')->insert([
            'numero' => 2,
            'nome' => 'banana',
        ]);

        DB::table('cod')->insert([
            'numero' => 3,
            'nome' => 'pneu',
        ]);
    }
}
