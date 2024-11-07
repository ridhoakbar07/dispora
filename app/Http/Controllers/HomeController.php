<?php

namespace App\Http\Controllers;

use App\Models\Profile;
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
        $profile = Profile::select('visi_misi')->first();
        return view('pages.visi-misi', ['profile' => $profile]);
    }

    public function tujuanSasaran()
    {
        $profile = Profile::select('tujuan_sasaran')->first();
        return view('pages.tujuan-sasaran',['profile'=> $profile]);
    }

    public function strukturOrganisasi()
    {
        $profile = Profile::select('struktur_organisasi')->first();
        return view('pages.struktur-organisasi', ['profile'=> $profile]);
    }
}
