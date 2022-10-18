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
        Schema::create('ammo', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->text('name');
            $table->text('supplier');
            $table->float('caliber');
            $table->float('weight');
            $table->unsignedFloat('user_rating');
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
        Schema::dropIfExists('ammo');
    }
};
