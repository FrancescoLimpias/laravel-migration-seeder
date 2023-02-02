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
        Schema::create('travel', function (Blueprint $table) {
            $table->id();

            // travel id
            $table->string("name", 100)->unique();

            $table->date("dep_date");
            $table->date("end_date");
            $table->smallInteger("locations_id")->unsigned(); /* prototype of foreign n*m key */

            // travel props
            $table->smallInteger("price")->unsigned();
            $table->tinyInteger("people_n")->unsigned();
            $table->text("description");
            $table->string("transport", 40);

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
        Schema::dropIfExists('travel');
    }
};
