<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setors')->insert([
            'nome' => 'alimentar',
        ]);

        DB::table('setors')->insert([
            'nome' => 'farma',
        ]);

        DB::table('setors')->insert([
            'nome' => 'esporte',
        ]);
    }
}
