<?php

use Faker\Generator as Faker;

$factory->define(App\Color::class, function (Faker $faker) {
    return [
      'name' => $faker->unique()->randomElement([
        'Azul',
        'Rojo',
        'Negro',
        'Gris',
        'Amarillo',
        'Naranja',
        'Blanco',
        'Marron',
        'Verde',
      ]),
    ];
});
