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
        Schema::create('armadas', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 50);
            $table->double('price');
            $table->string('picture_url') ->nullable();
            // $table->string('picture_1') ->nullable();
            $table->enum('transmission', ['matic','manual']);
            $table->string('plat', '10')->nullable();
            $table->enum('status', ['available','booked']) ->default('available');
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
        Schema::dropIfExists('armadas');
    }
};
