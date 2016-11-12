<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataRiwayatGolonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_riwayat_golongan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');

            $table->unsignedSmallInteger('golongan_id')->nullable();

            $table->string('no_sk');
            $table->date('tgl_sk');
            $table->date('tmt');

            $table->string('no_bkn');
            $table->date('tgl_bkn');

            $table->unsignedSmallInteger('kp_id')->nullable();

            $table->unsignedSmallInteger('masa_kerja');

            $table->timestamps();
        });

        Schema::table('data_riwayat_golongan', function (Blueprint $table) {
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('golongan_id')->references('id')->on('golongan')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('kp_id')->references('id')->on('kp')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_riwayat_golongan');
    }
}
