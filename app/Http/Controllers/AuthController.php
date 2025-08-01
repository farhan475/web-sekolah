<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //========================================================
    // LOGIKA REGISTRASI
    //========================================================

    /**
     * Menampilkan halaman formulir registrasi.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Memproses data dari formulir registrasi.
     */
    public function register(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // 'confirmed' akan mencocokkan dengan password_confirmation
        ]);

        // 2. Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // PENTING: Password harus di-hash
        ]);

        // 3. Login pengguna yang baru dibuat
        Auth::login($user);

        // 4. Arahkan ke halaman dasbor
        return redirect()->route('dashboard');
    }


    //========================================================
    // LOGIKA LOGIN
    //========================================================

    /**
     * Menampilkan halaman formulir login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Memproses data dari formulir login.
     */
    public function login(Request $request)
    {
        // 1. Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Coba lakukan otentikasi
        if (Auth::attempt($credentials)) {
            // Jika berhasil, regenerate session untuk keamanan
            $request->session()->regenerate();

            // Arahkan ke halaman yang dituju sebelumnya atau ke dasbor
            return redirect()->intended(route('dashboard'));
        }

        // 3. Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }


    //========================================================
    // LOGIKA LOGOUT
    //========================================================

    /**
     * Memproses logout pengguna.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate session dan regenerate token untuk keamanan
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Arahkan ke halaman utama
        return redirect('/');
    }
}
