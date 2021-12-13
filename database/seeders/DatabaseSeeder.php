<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call([
        codSeeder::class,
        SetorsSeeder::class,
        ProdutoSeeder::class,
        VendasSeeder::class,
        ProdutoVendaSeeder::class
    ]);
    }
}
