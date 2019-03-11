<?php

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
    ];
});
