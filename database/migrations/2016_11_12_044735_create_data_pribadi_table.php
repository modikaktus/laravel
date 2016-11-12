<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPribadiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pribadi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');

            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('akta_lahir');

            $table->unsignedSmallInteger('agama_id')->nullable();
            // 0: false = Laki-laki, 1: true = Perempuan
            $table->boolean('kelamin')->default(false);
            $table->text('alamat');

            $table->string('nik');
            $table->string('bpjs');
            $table->string('npwp');

            $table->timestamps();
        });

        Schema::table('data_pribadi', function (Blueprint $table) {
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('agama_id')->references('id')->on('agama')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pribadi');
    }
}
