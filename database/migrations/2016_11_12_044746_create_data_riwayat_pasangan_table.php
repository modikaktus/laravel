<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataRiwayatPasanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_riwayat_pasangan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');

            $table->boolean('pns')->default(false);
            $table->string('nip');

            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('akta_lahir');

            $table->unsignedSmallInteger('agama_id')->nullable();
            $table->unsignedSmallInteger('pendidikan_id')->nullable();

            $table->date('tgl_menikah');
            $table->date('akta_menikah');

            $table->boolean('status_perkawinan')->default(false);
            $table->date('tgl_cerai');
            $table->string('akta_cerai');

            $table->boolean('status_hidup')->default(false);
            $table->date('tgl_meninggal');
            $table->string('akta_meninggal');

            $table->string('nik');
            $table->string('bpjs');
            $table->string('npwp');

            $table->timestamps();
        });

        Schema::table('data_riwayat_pasangan', function (Blueprint $table) {
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('agama_id')->references('id')->on('agama')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('data_riwayat_pasangan');
    }
}
