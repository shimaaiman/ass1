<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
    	'product_lineID' => factory('App\ProductLine')->create()->id,
        'Name' => $faker-> name,
        'Scale'=> $faker->randomNumber(2),
        'vendor' => $faker-> word,
        'PdtDescription' => $faker-> word,
        'QtyInStock'=> $faker->randomNumber(2),
        'BuyPrice'=> $faker->randomNumber(2),
        'MSRP' => $faker-> word
    ];
});
