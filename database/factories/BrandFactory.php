<?php

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
  return [
    'name' => $faker->unique()->randomElement([
      'Adidas',
      'Nike',
      'RipCurl',
      'Narrow',
      'QuickSilver',
      'Kevingston',
      'Calvin Klein',
      '47 Street',
      'Zara',
      'Ona Saez',
    ]),
  ];
});
