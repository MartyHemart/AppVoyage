<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Voyage;
use Faker\Generator as Faker;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
      'destination' => $faker->country,
      'description' => $faker->sentence,
      'prix' => $faker->numberBetween(100,2000),
      'image' => $faker->imageUrl($width = 640, $height = 480, 'city'),
      'titre' => $faker->text($maxNbChars = 12),
    ];
});
