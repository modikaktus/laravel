<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataOrangtuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_orangtua', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');

            $table->boolean('ayah_pns')->default(false);
            $table->string('ayah_nip');

            $table->string('ayah_tempat_lahir');
            $table->date('ayah_tgl_lahir');
            $table->string('ayah_akta_lahir');

            $table->unsignedSmallInteger('ayah_agama_id')->nullable();
            $table->unsignedSmallInteger('ayah_pendidikan_id')->nullable();

            $table->boolean('ayah_status_hidup')->default(false);
            $table->date('ayah_tgl_meninggal');
            $table->string('ayah_akta_meninggal');

            $table->string('ayah_nik');
            $table->string('ayah_bpjs');
            $table->string('ayah_npwp');

            $table->boolean('ibu_pns')->default(false);
            $table->string('ibu_nip');

            $table->string('ibu_tempat_lahir');
            $table->date('ibu_tgl_lahir');
            $table->string('ibu_akta_lahir');

            $table->unsignedSmallInteger('ibu_agama_id')->nullable();
            $table->unsignedSmallInteger('ibu_pendidikan_id')->nullable();

            $table->boolean('ibu_status_hidup')->default(false);
            $table->date('ibu_tgl_meninggal');
            $table->string('ibu_akta_meninggal');

            $table->string('ibu_nik');
            $table->string('ibu_bpjs');
            $table->string('ibu_npwp');

            $table->timestamps();
        });

        Schema::table('data_orangtua', function (Blueprint $table) {
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('ayah_agama_id')->references('id')->on('agama')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('ayah_pendidikan_id')->references('id')->on('pendidikan')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('ibu_agama_id')->references('id')->on('agama')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('ibu_pendidikan_id')->references('id')->on('pendidikan')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_orangtua');
    }
}
