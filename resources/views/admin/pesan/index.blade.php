@extends('layouts.app')

@section('title', 'Pesan Masuk')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Pesan Masuk</h1>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded mb-6" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full leading-normal">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">Tanggal</th>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">Nama</th>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">Email</th>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">Subjek & Pesan</th>
                    <th class="px-5 py-3 border-b-2 text-center text-xs font-semibold uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @forelse ($pesans as $pesan)
                    <tr>
                        <td class="px-5 py-4 border-b text-sm text-gray-500">{{ $pesan->created_at->format('d M Y, H:i') }}</td>
                        <td class="px-5 py-4 border-b font-medium">{{ $pesan->nama }}</td>
                        <td class="px-5 py-4 border-b text-sm"><a href="mailto:{{ $pesan->email }}" class="text-blue-600 hover:underline">{{ $pesan->email }}</a></td>
                        <td class="px-5 py-4 border-b">
                            <p class="font-semibold">{{ $pesan->subjek }}</p>
                            <p class="text-sm text-gray-600 mt-1">{{ Str::limit($pesan->isi_pesan, 100) }}</p>
                        </td>
                        <td class="px-5 py-4 border-b text-center">
                            <form action="{{ route('admin.pesan.destroy', $pesan) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus pesan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-10 text-gray-500">Tidak ada pesan masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">{{ $pesans->links() }}</div>
@endsection