<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(IntegranteTableSeeder::class);
        $this->call(DeporteTableSeeder::class);
        $this->call(EquipoTableSeeder::class);
        $this->call(PartidoTableSeeder::class);
        $this->call(TorneoTableSeeder::class);
    }
}
