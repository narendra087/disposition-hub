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
        // Validate the form data
        $request->validate([
            'nama_pemohon' => ['required'],
            'id_pemohon' => ['required'],
            'no_wa' => ['required'],
            'email' => ['required', 'email'],
            'jabatan' => ['required'],
            'program_studi' => ['required'],
            'organisasi' => ['nullable'],
            'judul' => ['required'],
            'tgl_mulai' => ['required', 'date'],
            'tgl_akhir' => ['required', 'date'],
            'peserta' => ['nullable'],
            'jumlah_peserta' => ['nullable', 'numeric'],
            'tempat_kegiatan' => ['nullable'],
            'surat_permohonan' => ['required', 'mimes:pdf'],
            'ttd_pemohon' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        // Get the name of the file
        $applicationLetterName = time() . '_' . $request->surat_permohonan->getClientOriginalName();
        $applicantSignatureName = time() . '_' . $request->ttd_pemohon->getClientOriginalName();

        // Move the uploaded file to the public/uploads folder
        $request->file('surat_permohonan')->move(public_path('uploads'), $applicationLetterName);
        $request->file('ttd_pemohon')->move(public_path('uploads'), $applicantSignatureName);

        // Store the data in the database
        $data = $request->except(['surat_permohonan', 'ttd_pemohon']);
        $data['surat_permohonan'] = $applicationLetterName;
        $data['ttd_pemohon'] = $applicantSignatureName;

        Application::create($data);

        return redirect('/')->with('success', 'Kami akan mengirimkan hasil dari proses permohonan melalui email dan/atau WhatsApp yang anda berikan.');
    }
}
