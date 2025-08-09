<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PesanController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil-sekolah', [PageController::class, 'profil'])->name('profil');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/berita/{berita}', [PageController::class, 'showBerita'])->name('berita.show');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});


Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'admin' || $user->role === 'administrator') {
                return redirect()->route('admin.dashboard');
            }
            return view('dashboard');
        }
        return redirect()->route('login');
    })->name('dashboard');
    Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
    Route::post('/kontak', [PageController::class, 'storeKontak'])->name('kontak.store');
    Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('berita', BeritaController::class)->parameters([
            'berita' => 'berita'
        ]);
        Route::get('/pesan', [PesanController::class, 'index'])->name('pesan.index');
        Route::delete('/pesan/{pesan}', [PesanController::class, 'destroy'])->name('pesan.destroy');
    });
});
