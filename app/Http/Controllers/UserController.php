<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Disposition;
use App\Models\DispositionContent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $query = Application
            ::join('dispositions', 'applications.id', '=', 'dispositions.application_id')
            ->leftJoin('disposition_contents', 'dispositions.id', '=', 'disposition_contents.disposition_id')
            ->select(
                // get application data
                'applications.*',
                // get disposition data
                'dispositions.id as id_disposisi',
                'dispositions.kode as kode_disposisi',
                'dispositions.status as status_disposisi',
                'dispositions.created_at as tanggal_disposisi',
                // get content data
                'disposition_contents.id as id_konten',
                'disposition_contents.content as konten',
                'disposition_contents.status as status_konten'
            );

        if ($user->role_id === 1) {
            return to_route('admin');
        } else if ($user->role_id === 2) {
            $query->where('disposition_contents.user_id', $user->id);
        } else {
            $query->where('disposition_contents.forward_id', $user->id);
        }

        $dispositions = $query
            ->orderBy('dispositions.status', 'asc')
            ->orderBy('dispositions.created_at', 'desc')
            ->get();

        foreach ($dispositions as $disposition) {
            $disposition->tanggal_disposisi = Carbon::parse($disposition->tanggal_disposisi)->format('Y-m-d');

            $contents = DispositionContent
                ::where('disposition_id', $disposition->id_disposisi)
                ->orderBy('created_at', 'asc')
                ->get();

            $disposition->konten = $contents;
        };

        return view('user.dashboard-user', [
            'dispositions' => $dispositions
        ]);
    }

    public function forwardDisposition(Request $request)
    {

        $user = Auth::user();
        $request->validate([
            'disposition_id' => ['required'],
            'application_id' => ['required'],
            'forward_id' => [$user->id  === 2 ? 'required' : 'nullable'],
            'content_id' => ['nullable'],
            'content' => ['required'],
        ]);

        $forwardId = 0;
        switch ($user->id) {
            case 2:
                $forwardId = $request->forward_id;
                break;
            case 3:
            case 4:
            case 5:
                $forwardId = 6;
                break;
            default:
                $forwardId = $user->id + 1;
                break;
        }

        $disposition = Disposition::findOrFail($request->disposition_id);
        $disposition->update([
            'status' => 1,
            'forward_id' => $forwardId
        ]);

        if ($request->content_id) {
            $konten = DispositionContent::findOrFail($request->content_id);
            $konten->update([
                'status' => 1,
            ]);
        }

        DispositionContent::create([
            'user_id' => $user->id,
            'application_id' => $request->application_id,
            'disposition_id' => $request->disposition_id,
            'forward_id' => $forwardId,
            'content' => $request->content
        ]);

        return redirect('/dasbor')->with('success', 'Disposisi berhasil diteruskan.');
    }
}
