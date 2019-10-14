<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Inventory::class, function (Faker $faker) {
    return [
        'sku' => $faker->randomDigit,
        'qty' => $faker->randomDigit,
        'amt' => $faker->randomDigit,
        'product_name' => $faker->text(10),
        'product_desc' => $faker->text(10)
    ];
});