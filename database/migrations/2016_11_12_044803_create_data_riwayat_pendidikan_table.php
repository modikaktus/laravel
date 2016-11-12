<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataRiwayatPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_riwayat_pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');

            $table->unsignedSmallInteger('pendidikan_id')->nullable();
            $table->string('pendidikan');

            $table->boolean('dasar_cpns')->default(false);

            $table->string('no_ijazah');
            $table->date('tgl_lulus');

            $table->string('sekolah');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');

            $table->timestamps();
        });

        Schema::table('data_riwayat_pendidikan', function (Blueprint $table) {
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('pendidikan_id')->references('id')->on('pendidikan')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_riwayat_pendidikan');
    }
}
