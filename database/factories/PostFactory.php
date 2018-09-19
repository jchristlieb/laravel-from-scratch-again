<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->words(rand(1,3), true),
        'body' => $faker->paragraphs(rand(2, 10), true),
        'user_id' => $faker->numberBetween(1,4),
        'created_at' => $faker->unique()->dateTimeBetween('-1 year', 'now')
    ];
});
