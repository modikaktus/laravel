<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUtamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_utama', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id');

            $table->date('tmt_cpns');
            $table->date('tmt_pns');
            $table->unsignedSmallInteger('status_pegawai_id')->nullable();
            $table->unsignedSmallInteger('jenis_pegawai_id')->nullable();
            $table->string('karpeg');

            $table->timestamps();
        });

        Schema::table('data_utama', function (Blueprint $table) {
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('status_pegawai_id')->references('id')->on('status_pegawai')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('jenis_pegawai_id')->references('id')->on('jenis_pegawai')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_utama');
    }
}
