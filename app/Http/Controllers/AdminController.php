<?php

namespace App\Http\Controllers;

use App\Models\Application;
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


}
