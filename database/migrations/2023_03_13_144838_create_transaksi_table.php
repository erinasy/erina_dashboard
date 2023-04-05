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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->String('transaksi_id',10)->primary();
            $table->String('reservasi_id',10);
            $table->String('total_pembayaran',50);
            $table->date('tgl_transaksi');
            $table->String('status_transaksi',25);
            $table->timestamps();

            $table->foreign('reservasi_id')->references('reservasi_id')->on('reservasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
