<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        //'salesRepEmployeeNum' => factory('App\Employee')->create()->id,
        'salesRepEmployeeNum' => \App\Employee::all()->random()->id,
        'Name' => $faker-> name,
        'LastName' => $faker-> name,
        'FistName' => $faker-> name,
        'Phone' => $faker-> word,
        'Address1' => $faker-> address,
        'Address2' => $faker-> address,
        'City' => $faker-> city,
        'State' => $faker-> word,
        'PostalCode'=> $faker->randomNumber(6),
        'Country' => $faker-> country,
        'CreditLimit'=> $faker->randomNumber(2)
    ];
});
