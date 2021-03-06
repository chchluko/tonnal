<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMl10224tDecreasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_mer_ml_1022_4t', function (Blueprint $table) {
            $table->increments('id_1022_4t');
              $table->integer('pliegos_10_22');
              $table->integer('merma_10_22');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cat_mer_ml_1022_4t');
    }
}
