<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shots', function (Blueprint $table) {
            $table->id();
            $table->integer('score_type_id');
            $table->smallInteger('weapon_id')->nullable();
            $table->smallInteger('ammo_id')->nullable();
            $table->integer('training_log_id')->nullable();
            $table->integer('shot_data_id')->nullable();
            $table->integer('shots_quantity');
            $table->smallInteger('score');
            $table->smallInteger('order')->nullable();
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
        Schema::dropIfExists('shots');
    }
};
