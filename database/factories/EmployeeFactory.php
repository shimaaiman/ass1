<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
    	//'OfficeCode' => factory('App\Office')->create()->Code,
    	'OfficeCode' => \App\Office::all()->random()->Code,
    	'reportsTo'=> $faker->randomNumber(6),
        'LastName' => $faker-> name,
        'FirstName' => $faker-> name,
        'Extension' => $faker-> word,
        'Email' => $faker-> unique()->safeEmail,
        'JobTitle' => $faker-> word
        
    ];
});
