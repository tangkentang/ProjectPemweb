<?php

namespace App\Http\Controllers;

use App\Models\pemweb;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        if ($query) {
            $data = pemweb::where('kode', 'LIKE', "%{$query}%")
                         ->orWhere('nama', 'LIKE', "%{$query}%")
                         ->orWhere('layanan', 'LIKE', "%{$query}%")
                         ->orWhere('tipe', 'LIKE', "%{$query}%")
                         ->paginate(5);
        } else {
            $data=pemweb::paginate(5);
        }

        return view('track-order', ['data' => $data]);
    }
}
