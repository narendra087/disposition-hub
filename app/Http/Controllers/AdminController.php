<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Disposition;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $applications = Application::orderBy('status', 'asc')->orderBy('created_at', 'desc')->get();

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
