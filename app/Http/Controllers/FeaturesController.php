<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    function cekSession(Request $request)
    {
        $nama = 'Deny';
        $session = $request->session()->all();

        return view('features.index', [
            'nama' => $nama,
            'session' => $session,
        ]);
    }
}
