<?php

use Faker\Generator as Faker;

$factory->define(\App\question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->unique()->sentence(rand(1,3)),'.'),
        //'slug' => rtrim($faker->sentence(rand(1,3)),'.'),
        'body' => $faker->paragraph(rand(5,10),true),
        'views' => rand(0,20),
        'votes' => rand(-3,20),
        'answers' => rand(0,20),
    ];
});
