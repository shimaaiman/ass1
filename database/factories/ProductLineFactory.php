<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\ProductLine::class, function (Faker $faker) {
    return [
        'DescinText' => $faker-> word,
        'DescinHTML' => $faker-> word,
        'Image' => $faker-> word
        
    ];
});
