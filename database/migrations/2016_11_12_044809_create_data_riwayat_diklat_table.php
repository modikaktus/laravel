<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataRiwayatDiklatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_riwayat_diklat', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');

            $table->timestamps();
        });

        Schema::table('data_riwayat_diklat', function (Blueprint $table) {
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_riwayat_diklat');
    }
}
