<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function kontakKami()
    {
        return view('pages.kontak-kami');
    }

    public function visiMisi()
    {
        return view('pages.visi-misi');
    }

    public function tujuanSasaran()
    {
        return view('pages.tujuan-sasaran');
    }

    public function strukturOrganisasi()
    {
        return view('pages.struktur-organisasi');
    }
}
