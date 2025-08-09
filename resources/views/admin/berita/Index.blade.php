@extends('layouts.app')

@section('title', 'Kelola Berita')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Kelola Berita</h1>
        <a href="{{ route('admin.berita.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors">
            + Tambah Berita Baru
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded mb-6" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full leading-normal">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">No</th>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">Gambar</th>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">Judul</th>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">Tanggal</th>
                    <th class="px-5 py-3 border-b-2 text-center text-xs font-semibold uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @forelse ($beritas as $index => $berita)
                    <tr>
                        <td class="px-5 py-4 border-b">{{ $index + $beritas->firstItem() }}</td>
                        <td class="px-5 py-4 border-b">
                            @if($berita->gambar)
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-24 h-16 object-cover rounded">
                            @else
                                <span class="text-gray-400">Tanpa Gambar</span>
                            @endif
                        </td>
                        <td class="px-5 py-4 border-b font-medium">{{ Str::limit($berita->judul, 40) }}</td>
                        <td class="px-5 py-4 border-b text-sm text-gray-500">{{ $berita->created_at->format('d M Y') }}</td>
                        <td class="px-5 py-4 border-b text-center">
                            <a href="{{ route('admin.berita.edit', $berita) }}" class="text-indigo-600 hover:text-indigo-900 font-semibold mr-4">Edit</a>
                            <form action="{{ route('admin.berita.destroy', $berita) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin hapus berita ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-10 text-gray-500">Belum ada data berita.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $beritas->links() }}
    </div>
@endsection