<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('Code');
            $table->unsignedBigInteger('product_lineID');
            $table->string('Name', 255);
            $table->integer('Scale');
            $table->string('vendor', 255);
            $table->string('PdtDescription', 255);
            $table->integer('QtyInStock');
            $table->double('BuyPrice', 19, 0);
            $table->string('MSRP', 255);
            $table->timestamps();

            
            $table->foreign('product_lineID')->references('id')->on('product_lines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
