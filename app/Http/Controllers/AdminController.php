<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Disposition;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $applications = Application::get();

        return view('admin.dashboard', [
            'applications' => $applications
        ]);
    }

    public function sendDisposition(Request $request)
    {
        $request->validate([
            'application_id' => ['required'],
            'kode' => ['required'],
        ]);

        Disposition::create($request->all());

        return redirect('/admin')->with('success', 'Disposisi berhasil dikirim.');
    }
}
