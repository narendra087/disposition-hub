<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemohon' => 'required',
            'id_pemohon' => 'required',
            'no_wa' => 'required',
            'email' => 'required|email',
            'jabatan' => 'required',
            'program_studi' => 'required',
            'organisasi' => 'nullable',
            'judul' => 'required',
            'tgl_mulai' => 'required|date',
            'tgl_akhir' => 'required|date',
            'peserta' => 'nullable',
            'jumlah_peserta' => 'nullable|numeric',
            'tempat_kegiatan' => 'nullable',
            'surat_permohonan' => 'required|mimes:pdf',
            'ttd_pemohon' => 'required|mimes:jpg,jpeg,png',
        ]);

        $applicationLetter = time() . '_' . $request->surat_permohonan->getClientOriginalName() . '.' . $request->surat_permohonan->extension();
        $applicantSignature = time() . '_' . $request->ttd_pemohon->getClientOriginalName() . '.' . $request->ttd_pemohon->extension();

        $request->file->move(public_path('uploads'), $applicationLetter);
        $request->file->move(public_path('uploads'), $applicantSignature);

        Application::create($request->all());

        return redirect('/')->with('success', 'Permohonan berhasil dikirim, kami akan mengirimkan hasil dari proses permohonan melalui email dan/atau WhatsApp yang anda berikan.');
    }
}
