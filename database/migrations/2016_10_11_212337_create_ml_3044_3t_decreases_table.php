<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMl30443tDecreasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_mer_ml_3044_3t', function (Blueprint $table) {
            $table->increments('id_3044_3t');
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
        Schema::drop('cat_mer_ml_3044_3t');
    }
}
