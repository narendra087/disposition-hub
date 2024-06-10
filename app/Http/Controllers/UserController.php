<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $dispositions = Application
            ::join('dispositions', 'applications.id', '=', 'dispositions.application_id')
            ->select(
                'applications.*',
                'dispositions.id as id_disposisi',
                'dispositions.status as status_disposisi',
                'dispositions.created_at as tanggal_disposisi'
            )
            ->whereNull('dispositions.status')
            ->orderBy('dispositions.created_at')
            ->get();

        foreach ($dispositions as $disposition) {
            $disposition->tanggal_disposisi = Carbon::parse($disposition->tanggal_disposisi)->format('Y-m-d');
        }


            return view('user.dashboard-user', [
                'dispositions' => $dispositions
            ]);
    }
}
