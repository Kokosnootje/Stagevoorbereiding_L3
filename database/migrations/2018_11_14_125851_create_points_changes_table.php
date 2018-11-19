<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points_changes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('change');
            $table->boolean('is_positive');
            $table->unsignedInteger('points_today_id');
            $table->foreign('points_today_id')->references('id')->on('points_today');
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
        Schema::dropIfExists('points_changes');
    }
}
