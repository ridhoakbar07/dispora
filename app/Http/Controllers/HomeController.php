<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Pegawai;
use App\Models\Profile;
use App\Models\UnitKerja;
use Firefly\FilamentBlog\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'asc')->take(4)->get();
        $events = Post::whereRelation('categories', 'name', '=', "Event")->orderBy('scheduled_for', 'asc')->take(5)->get();
        $pengumumans = Post::whereRelation('categories', 'name', '=', "Pengumuman")->orderBy('published_at', 'asc')->take(5)->get();
        $banners = Banner::orderBy('created_at', 'asc')->take(5)->get();

        return view('pages.home', ['posts' => $posts, 'banners' => $banners, 'events' => $events, 'pengumumans' => $pengumumans]);
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
        return view('pages.tujuan-sasaran', ['profile' => $profile]);
    }

    public function strukturOrganisasi()
    {
        $profile = Profile::select('struktur_organisasi')->first();
        return view('pages.struktur-organisasi', ['profile' => $profile]);
    }

    public function pegawai(Request $request)
    {
        $filter = $request->get('filter', '');

        $unitKerja = UnitKerja::all();

        $kepalaDinas = Pegawai::where('jenis_jabatan', "=", 'Jabatan Tinggi Pratama')->first();

        $pegawai = Pegawai::when($filter, function ($query, $filter) {
            return $query->whereHas('unitKerja', function ($query) use ($filter) {
                $query->where('nama_bidang', 'like', '%' . urldecode($filter) . '%');
            });
        })->get();

        return view('pages.pegawai', ['kepalaDinas' => $kepalaDinas, 'pegawai' => $pegawai, 'unitKerja' => $unitKerja]);
    }
}
