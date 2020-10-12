<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order_product::class, function (Faker $faker) {
    return [
    	'OrderID' => factory('App\Order')->create()->id,
    	'ProductCode' => factory('App\Product')->create()->Code,
        'Qty' => $faker->randomNumber(2),
        'PriceEach' => $faker->randomNumber(2)
    ];
});
