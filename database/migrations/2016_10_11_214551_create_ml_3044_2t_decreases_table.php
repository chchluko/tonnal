<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMl30442tDecreasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ml_3044_2t_decreases', function (Blueprint $table) {
            $table->increments('id_3044_2t');
              $table->integer('pliegos_30_44');
              $table->integer('merma_30_44');
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
        Schema::drop('ml_3044_2t_decreases');
    }
}
