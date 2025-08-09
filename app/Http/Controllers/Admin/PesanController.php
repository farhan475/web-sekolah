<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan; 
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $pesans = Pesan::latest()->paginate(15);
        
        return view('admin.pesan.index', compact('pesans'));
    }

    
    public function destroy(Pesan $pesan)
    {
        $pesan->delete();
        
        return back()->with('success', 'Pesan berhasil dihapus.');
    }
}