<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_table', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('type');
            $table->string('brand');
            $table->integer('price_1');
            $table->integer('price_2')->nullable();
            $table->longText('description')->nullable();
            $table->integer('quantity');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_table');
    }
}
