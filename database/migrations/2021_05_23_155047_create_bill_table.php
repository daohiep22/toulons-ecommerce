<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_table', function (Blueprint $table) {
            $table->bigIncrements('bill_id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('order_id');
            $table->integer('status')->nullable();
            $table->integer('quantity');
            $table->bigInteger('total');
            $table->longText('detail')->nullable();
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
        Schema::dropIfExists('bill_table');
    }
}
