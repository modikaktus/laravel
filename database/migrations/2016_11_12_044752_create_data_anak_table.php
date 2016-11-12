<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anak', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');

            // 1: Kandung, 2: Tiri, 3: Angkat
            $table->unsignedSmallInteger('status_anak');

            $table->unsignedInteger('ayah_id')->nullable();
            $table->string('ayah_nama');

            $table->boolean('pns')->default(false);
            $table->string('nip');

            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('akta_lahir');

            // 0: false = Laki-laki, 1: true = Perempuan
            $table->boolean('kelamin')->default(false);
            $table->unsignedSmallInteger('agama_id')->nullable();

            // 1: Sekolah, 2: Tidak sekolah, 3: Lulus
            $table->unsignedSmallInteger('status_pendidikan');
            $table->unsignedSmallInteger('pendidikan_id')->nullable();
            $table->text('alasan');

            $table->string('nik');
            $table->string('bpjs');
            $table->string('npwp');

            $table->timestamps();
        });

        Schema::table('data_anak', function (Blueprint $table) {
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
        Schema::dropIfExists('data_anak');
    }
}
