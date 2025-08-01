<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Halaman untuk user login biasa
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Halaman umum (beranda, profil, berita, kontak)
Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil-sekolah', [PageController::class, 'profil'])->name('profil');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/berita/{berita}', [PageController::class, 'showBerita'])->name('berita.show');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// Route khusus admin dengan prefix /admin
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // CRUD Berita
    Route::resource('berita', BeritaController::class);

    // Optional: kelola profile jika admin juga punya akses
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 

// Rute untuk menampilkan form registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.show');
// Rute untuk memproses data dari form registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

// Rute untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.show');
// Rute untuk memproses data dari form login
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Halaman Dasbor yang hanya bisa diakses setelah login
Route::get('/dashboard', function () {
    // Di sini kita bisa menambahkan logika untuk admin nanti
    return view('dashboard');
})->middleware('auth')->name('dashboard');