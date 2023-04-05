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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->String('reservasi_id',10)->primary();
            $table->String('customers_id',10);
            $table->String('kamar_id',10);
            $table->String('fasilitas_id',10);
            $table->date('check_in');
            $table->date('check_out');
            $table->String('total_pembayaran', 50);
            $table->timestamps();

            $table->foreign('customers_id')->references('customers_id')->on('customers');
            $table->foreign('kamar_id')->references('kamar_id')->on('kamar');
            $table->foreign('fasilitas_id')->references('fasilitas_id')->on('fasilitas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
};
