<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [
    	'CustomerID' => factory('App\Customer')->create()->id,
        'PaymentDate' => $faker-> dateTime,
        'Amount' => $faker->randomNumber(2)
    ];
});
