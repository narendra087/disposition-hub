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
            $table->string('organisasi')->nullable();
            $table->string('judul');
            $table->string('tgl_mulai');
            $table->string('tgl_akhir');
            $table->string('peserta')->nullable();
            $table->string('jumlah_peserta')->nullable();
            $table->string('tempat_kegiatan')->nullable();
            $table->string('surat_permohonan');
            $table->string('ttd_pemohon');
            $table->integer('status')->nullable();
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
