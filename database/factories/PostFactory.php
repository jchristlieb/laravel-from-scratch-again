<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence(rand(2,5)),
        'body' => $faker->paragraphs(rand(2, 10), true),
        'user_id' => \App\User::inRandomOrder()->first()->id,
        'created_at' => $faker->unique()->dateTimeBetween('-1 year', 'now')
    ];
});
