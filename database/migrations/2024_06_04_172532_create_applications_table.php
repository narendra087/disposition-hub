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
            $table->string('nama_pemohon');
            $table->string('id_pemohon');
            $table->string('no_wa');
            $table->string('email');
            $table->string('jabatan');
            $table->string('program_studi');
            $table->string('organisasi');
            $table->string('judul');
            $table->string('tgl_mulai');
            $table->string('tgl_akhir');
            $table->string('peserta');
            $table->string('jumlah_peserta');
            $table->string('tempat_kegiatan');
            $table->string('surat_permohonan');
            $table->string('ttd_pemohon');
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
