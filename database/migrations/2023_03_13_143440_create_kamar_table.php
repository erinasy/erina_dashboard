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
        Schema::create('kamar', function (Blueprint $table) {
            $table->String('kamar_id',10)->primary();
            $table->String('lokasi',15);
            $table->String('typeKamar_id',10);
            $table->String('no_kamar',15);
            $table->String('keterangan',250);
            $table->String('photo');
            $table->timestamps();

            $table->foreign('typeKamar_id')->references('typeKamar_id')->on('type_kamar');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamar');
    }
};
