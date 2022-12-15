<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request)
    {
        // $request->session()->flush();
        $session = $request->session()->all();
        return view('templates.index', [
            'session' => $session,
        ]);
    }

    function cekSession(Request $request)
    {
        $nama = 'Deny';
        // $request->session()->put('tipe', 'alpha');
        // $request->session()->flash('pesan', 'Ini rumah');
        $session = $request->session()->all();

        return view('home.index', [
            'nama' => $nama,
            'session' => $session,
        ]);
    }

    function pesan()
    {
        return redirect('/')->with(['success' => 'Pesan tersampaikan']);
    }

    function formPage()
    {
        return view('form.form_page');
    }

    function createData(Request $request)
    {
       $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5|max:8',
            'nama' => 'required|'
        ]);

        return view('form.hasil', [
            'data' => $request
        ])->with(['success' => 'Data berhasil divalidasi!']);
    }
}
