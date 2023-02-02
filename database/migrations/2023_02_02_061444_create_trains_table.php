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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            // train id
            $table->string("brand", 100);
            $table->string("code", 10)->unique();
            $table->string("railway", 10);

            // train direction
            $table->string("heading", 100);

            // train props
            $table->tinyInteger("wagons")->unsigned();
            $table->smallInteger("passengers")->unsigned();

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
        Schema::dropIfExists('trains');
    }
};
