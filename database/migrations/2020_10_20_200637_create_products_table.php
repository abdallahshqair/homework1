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
            $table->id('code');
            $table->unsignedBigInteger('ProductLineID');
            $table->string('Name');
            $table->integer('Scale');
            $table->string('vendor');
            $table->string('PdtDescription');
            $table->integer('QtyLnStock');
            $table->integer('BuyPrice');
            $table->integer('MSRP');
            $table->timestamps();
            $table->foreign('ProductLineID')->references('id')->on('productlines');
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
