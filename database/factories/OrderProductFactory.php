<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order_product::class, function (Faker $faker) {
    return [
    	//'OrderID' => factory('App\Order')->create()->id,
    	'OrderID' => \App\Order::all()->random()->id,
    	//'ProductCode' => factory('App\Product')->create()->Code,
    	'ProductCode' => \App\Product::all()->random()->Code,
        'Qty' => $faker->randomNumber(2),
        'PriceEach' => $faker->randomNumber(2)
    ];
});
