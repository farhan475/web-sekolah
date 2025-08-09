<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        $beritaTerbaru = Berita::latest()->take(3)->get();

        return view('pages.beranda', [
            'beritaTerbaru' => $beritaTerbaru
        ]);
    }

    public function profil()
    {
        return view('pages.profil');
    }

    public function berita()
    {
        $semuaBerita = Berita::latest()->paginate(6);

        return view('pages.berita', [
            'semuaBerita' => $semuaBerita
        ]);
    }

    public function showBerita(Berita $berita)
    {
        return view('pages.berita_show', [
            'berita' => $berita
        ]);
    }

    public function kontak()
    {
        return view('pages.kontak');
    }
    public function storeKontak(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'isi_pesan' => 'required|string',
        ]);

        Pesan::create($validated);

        return back()->with('success', 'Pesan Anda telah berhasil terkirim! Terima kasih telah menghubungi kami.');
    }
}
