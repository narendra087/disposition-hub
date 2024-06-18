<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Disposition;
use App\Models\DispositionContent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $applications = Application
            ::leftJoin('dispositions', 'applications.id', '=', 'dispositions.application_id')
            ->select(
                // get application data
                'applications.*',
                // get disposition data
                'dispositions.kode as kode_disposisi',
                'dispositions.id as id_disposisi',
                'dispositions.status as status_disposisi',
                'dispositions.created_at as tanggal_disposisi',
            )
            ->orderBy('status', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        foreach ($applications as $application) {

            $contents = DispositionContent
                ::where('disposition_id', $application->id_disposisi)
                ->orderBy('created_at', 'asc')
                ->get();

            $application->konten = $contents;
        };

        return view('admin.dashboard-admin', [
            'applications' => $applications
        ]);
    }

    public function sendDisposition(Request $request)
    {
        $application = Application::findOrFail($request->application_id);

        $application->update([
            'status' => 1
        ]);

        $request->validate([
            'application_id' => ['required'],
            'kode' => ['required'],
            'status' => ['nullable']
        ]);

        Disposition::create($request->all());

        return redirect('/admin')->with('success', 'Disposisi berhasil dikirim.');
    }
}
