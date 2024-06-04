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
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('namaPemohon');
            $table->string('idPemohon');
            $table->string('noWA');
            $table->string('email');
            $table->string('jabatan');
            $table->string('programStudi');
            $table->string('namaorganisasi');
            $table->string('judul');
            $table->string('tglMulai');
            $table->string('tglAkhir');
            $table->string('peserta');
            $table->string('jumlahPeserta');
            $table->string('tempatKegiatan');
            $table->string('filePermohonan');
            $table->string('fileTtd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
