<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(uv_sport\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(uv_sport\Integrante::class, function (Faker $faker) {
    return [
        'codigo' => $faker->unique()->numberBetween(100000000,999999999),
        'plan' => $faker->numberBetween(1000,9999),
        'nombre' => $faker->name,
        'apellido' => $faker->name,
    ];
});

$factory->define(uv_sport\Deporte::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'descripcion' => $faker->text,
    ];
});

$factory->define(uv_sport\Equipo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'fecha' => $faker->date,
        'deporte' => $faker->name,
    ];
});

$factory->define(uv_sport\Partido::class, function (Faker $faker) {
    return [
        'fecha' => $faker->date,
        'torneo' => $faker->name,
        'equipo_local' => $faker->name,
        'equipo_visitante' => $faker->name,
        'marcador_local_visitante' => $faker->text,
    ];
});

$factory->define(uv_sport\Torneo::class, function (Faker $faker) {
    return [
        'fecha' => $faker->date,
        'nombre' => $faker->name,
    ];
});
