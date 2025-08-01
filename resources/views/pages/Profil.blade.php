@extends('layouts.public')

@section('title', 'Profil - SMK Negeri 64 Jakarta')

@section('content')

<!-- ===== HERO SECTION UNTUK PROFIL ===== -->
<section class="relative h-[300px] md:h-[400px] flex items-center justify-center text-white">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-60"></div>

    <!-- Content -->
    <div class="relative z-10 text-center px-6">
        <h1 class="text-4xl md:text-5xl font-bold">Profil Sekolah</h1>
        <p class="text-lg md:text-xl text-gray-200 mt-2">Mengenal Lebih Dekat SMK Negeri 64 Jakarta</p>
    </div>
</section>

<!-- ===== KONTEN UTAMA PROFIL ===== -->
<div class="py-20 bg-white">
    <div class="container mx-auto px-6 space-y-16">

        <!-- SEKSI VISI & MISI -->
        <section>
            <div class="bg-gray-50 rounded-lg shadow-lg p-8 md:p-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Kolom Visi -->
                    <div class="text-center md:text-left">
                        <h2 class="text-3xl font-bold text-blue-600 mb-4">Visi Kami</h2>
                        <p class="text-xl italic text-gray-700 leading-relaxed">
                            "Menjadi lembaga pendidikan unggul yang menghasilkan lulusan cerdas, berkarakter mulia, dan siap bersaing di tingkat global pada tahun 2030."
                        </p>
                    </div>

                    <!-- Kolom Misi -->
                    <div>
                        <h2 class="text-3xl font-bold text-blue-600 mb-4 text-center md:text-left">Misi Kami</h2>
                        <ul class="list-disc list-inside space-y-3 text-gray-600">
                            <li>Mengembangkan kurikulum yang adaptif dan inovatif sesuai perkembangan ilmu pengetahuan dan teknologi.</li>
                            <li>Menyelenggarakan proses belajar mengajar yang efektif, kreatif, dan menyenangkan.</li>
                            <li>Membina karakter siswa yang berlandaskan iman, taqwa, dan nilai-nilai luhur Pancasila.</li>
                            <li>Menggali dan mengembangkan potensi, minat, dan bakat siswa melalui kegiatan ekstrakurikuler.</li>
                            <li>Membangun kemitraan strategis dengan orang tua, masyarakat, dan dunia industri.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEKSI SEJARAH SINGKAT -->
        <section>
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Sejarah Singkat</h2>
            <div class="max-w-4xl mx-auto text-gray-600 leading-loose space-y-4">
                <p>
                    SMK Negeri 64 Jakarta didirikan pada tahun 2019 oleh para tokoh pendidikan yang peduli akan masa depan generasi muda. Berawal dari sebuah bangunan sederhana dengan jumlah siswa yang terbatas, sekolah ini tumbuh dan berkembang pesat berkat dedikasi para pendiri, guru, dan dukungan masyarakat.
                </p>
                <p>
                    Pada tahun pertama, fokus utama adalah pada pembangunan fondasi akademik yang kuat dan penanaman disiplin. Memasuki era 2021-an, sekolah mulai mengembangkan fasilitas fisik seperti laboratorium sains, perpustakaan, dan lapangan olahraga. Prestasi demi prestasi mulai diraih baik di tingkat kota maupun provinsi.
                </p>
                <p>
                    Kini, SMK Negeri 64 Jakarta telah menjadi salah satu sekolah rujukan yang dikenal dengan inovasi pembelajarannya dan lulusan-lulusan yang berhasil melanjutkan studi ke perguruan tinggi ternama di dalam dan luar negeri.
                </p>
            </div>
        </section>

    </div>
</div>
@endsection