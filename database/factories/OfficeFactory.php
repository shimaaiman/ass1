<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Office::class, function (Faker $faker) {
    return [
        'City' => $faker-> city,
        'Phone' => $faker-> word,
        'Adress1' => $faker-> address,
        'Adress2' => $faker-> address,
        'State' => $faker-> word,
        'Country' => $faker-> country,
        'PostalCode'=> $faker->randomNumber(6),
        'Territory' => $faker-> word
    ];
});
