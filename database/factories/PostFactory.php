<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title' => $faker->title,
      'content' => $faker->sentence,
      'active' => $faker->boolean,
      'author' => $faker->name,
      'visited' => $faker->numberBetween(0,20),
      'like' => $faker->numberBetween(0,20),
    ];
});
