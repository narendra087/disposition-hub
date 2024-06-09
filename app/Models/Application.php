<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemohon',
        'id_pemohon',
        'no_wa',
        'email',
        'jabatan',
        'program_studi',
        'organisasi',
        'judul',
        'tgl_mulai',
        'tgl_akhir',
        'peserta',
        'jumlah_peserta',
        'tempat_kegiatan',
        'surat_permohonan',
        'ttd_pemohon',
        'disposisi',
        'status',
    ];
}
