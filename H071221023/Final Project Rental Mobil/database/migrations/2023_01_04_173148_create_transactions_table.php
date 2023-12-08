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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('user_id');
            $table->string('fullname');
            $table->unsignedBigInteger('armada_id');
            $table->string('bookingcode');
            $table->bigInteger('total');
            $table->string('no_telp');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('waktu')->nullable();
            $table->text('alamat');
            $table->integer('durasi_sewa');
            $table->enum('status', ['pending','success','completed']) -> default('pending');
            $table->enum('supir', ['tanpa supir','dalam kota','luar kota']) -> default('tanpa supir');
            $table->enum('pengantaran', ['self pick-up','Delivery']) -> default('self pick-up');
            $table->string('dp_invoice')->nullable();
            $table->string('pelunasan_invoice')->nullable();
            $table->text('note')->nullable();
            $table->string('ktp');
            $table->string('sim');
            $table->timestamps();
            $table->bigInteger('service')->nullable();


            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('transactions');
    }
};
