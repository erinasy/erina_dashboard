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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi_rooms');
            $table->integer('no_rooms');
            $table->bigInteger('typerooms_id')->unsigned();
            $table->string('harga_rooms');
            $table->string('keterangan');
            $table->string('image');
            $table->string('dokumen');
            $table->timestamps();

            // Schema::table('buku', function (Blueprint $table) {
                $table->foreign('typerooms_id')->references('id')->on('type_rooms')
                ->onDelete('cascade');
            // });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
