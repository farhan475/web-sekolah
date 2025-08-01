<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        // Ambil 3 data berita terbaru dari database
        $beritaTerbaru = Berita::latest()->take(3)->get();

        // Kirim data tersebut ke view 'pages.beranda'
        return view('pages.beranda', [
            'beritaTerbaru' => $beritaTerbaru
        ]);
    }

    /**
     * Menampilkan halaman Profil Sekolah.
     */
    public function profil()
    {
        return view('pages.profil');
    }

    /**
     * Menampilkan halaman daftar semua Berita dengan paginasi.
     */
    public function berita()
    {
        // Ambil semua data berita, urutkan dari yang terbaru, dan bagi per 6 item per halaman
        $semuaBerita = Berita::latest()->paginate(6);

        // Kirim data tersebut ke view 'pages.berita'
        return view('pages.berita', [
            'semuaBerita' => $semuaBerita
        ]);
    }

    /**
     * Menampilkan halaman detail satu Berita.
     * Laravel secara otomatis akan mencari Berita berdasarkan ID dari URL (Route Model Binding).
     */
    public function showBerita(Berita $berita)
    {
        // Kirim data berita yang ditemukan ke view 'pages.berita_show'
        return view('pages.berita_show', [
            'berita' => $berita
        ]);
    }

    /**
     * Menampilkan halaman Kontak.
     */
    public function kontak()
    {
        return view('pages.kontak');
    }
}
