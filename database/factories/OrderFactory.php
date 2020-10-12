<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
    	'CustomerID' => factory('App\Customer')->create()->id,
        'OrderDate' => $faker-> dateTime,
        'RequiredDate' => $faker-> dateTime,
        'ShippedDate' => $faker-> dateTime,
        'Status' => $faker->randomNumber(2),
        'Comments' => $faker-> word
    ];
});
