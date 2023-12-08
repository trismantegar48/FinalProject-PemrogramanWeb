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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('armada_id')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->enum('status', ['available','booked'])-> default('available');
            $table->timestamps();

            $table->foreign('armada_id')->references('id')->on('armadas');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');

    }
};
