<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lens', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('lens_body');
            $table->integer('lens_sensor');
            // $table->integer('lens_mount');
            $table->integer('lens_tele')->nullable();
            $table->integer('lens_standard')->nullable();
            $table->integer('lens_wide')->nullable();
            $table->integer('lens_macro')->nullable();
            $table->integer('lens_portrait')->nullable();
            $table->integer('lens_fisheye')->nullable();
            $table->integer('lens_cine')->nullable();
            $table->integer('lens_extender')->nullable();
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
        Schema::dropIfExists('tbl_lens');
    }
}
