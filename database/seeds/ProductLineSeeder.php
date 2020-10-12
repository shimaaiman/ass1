<?php

use Illuminate\Database\Seeder;

class ProductLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProductLine::class, 5)->create();
    }
}
