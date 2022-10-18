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
        Schema::create('trainings_schemes', function (Blueprint $table) {
            $table->id();
            $table->text('stage_name')->nullable();
            $table->integer('weapon_id')->nullable();
            $table->integer('weapon_type_id')->nullable();
            $table->integer('training_stance_id')->nullable();
            $table->unsignedFloat('distance')->nullable();
            $table->unsignedInteger('shots_quantity');
            $table->unsignedInteger('shots_time_interval')->nullable();
            $table->unsignedInteger('scheme_reps_quantity');
            $table->unsignedInteger('accuracy_min_expectations');
            $table->unsignedInteger('accuracy_max_expectations');
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
        Schema::dropIfExists('trainings_schemes');
    }
};
