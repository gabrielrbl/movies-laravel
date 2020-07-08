<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ator;
use Faker\Generator as Faker;

$factory->define(Ator::class, function (Faker $faker) {
    return [
        'nome' => $faker->name
    ];
});
