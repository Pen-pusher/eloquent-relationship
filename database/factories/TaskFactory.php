<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'completed' => $faker->boolean,
        'description' => $faker->sentence,
    ];
});
