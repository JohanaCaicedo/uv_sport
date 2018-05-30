<?php

use Illuminate\Database\Seeder;
use uv_sport\Integrante;


class IntegranteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Integrante::class, 80)->create();
    }
}
