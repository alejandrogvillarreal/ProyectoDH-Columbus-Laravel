<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
      'name' => $faker->unique()->randomElement([
        'Buzos',
        'Camisas',
        'Pantalones',
        'Remeras',
        'Zapatillas',
        'Blusas',
        'Camperas',
        'Sandalias',
        'Vestidos',
      ]),
    ];
});
