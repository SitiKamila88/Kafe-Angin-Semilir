@extends('layout') {{-- Extends the main layout template --}}

@section('title', 'Profil - Kafe Angin Semilir') {{-- Sets the page title --}}

@push('styles') {{-- Adds custom styles to the head --}}
    <!-- CSS Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content') {{-- Main content section --}}

{{-- ===== PROFIL SECTION (HEADER & CERITA) ===== --}}
<div class="container mx-auto px-6">
    
    {{-- SLIDER HEADER PROFIL --}}
    <div class="w-full h-auto md:h-[400px] 
            rounded-[40px] 
            shadow-2xl shadow-black/65 
            overflow-hidden 
            mt-16 mb-16">

        {{-- Swiper container for image slider --}}
        <div class="swiper profilSwiper h-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/profil-header_1.jpg') }}" alt="Suasana Kafe 1" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/profil-header_2.jpg') }}" alt="Suasana Kafe 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/profil-header_3.jpg') }}" alt="Suasana Kafe 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/profil-header_4.jpg') }}" alt="Suasana Kafe 3" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>

    {{-- CERITA "YUK KENAL KAMI" --}}
    <section class="relative py-8">
        {{-- Grid layout for story content --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-start">
            
            {{-- [KIRI] Judul --}}
             
             <div>
            <h2 class="text-5xl font-extrabold mb-6">
                Yuk <span class="text-[#F9A826]">Kenal</span><br>
                Kami Lebih<br>
                <span class="text-[#F9A826]">Dekat...</span>
            </h2>
                <p class="text-black text-lg">

                Mari mengenal kisah dan suasana alami yang menghidupkan
                Kafe Angin Semilir.
            </p>
        </div>
            
            {{-- [KANAN] Teks Penjelasan Card 1 --}}
             <div class="md:col-span-2">
            <div class="bg-[#F9A826] rounded-[50px] p-8 shadow-2xl shadow-black/65 text-black text-sm leading-relaxed">
                <span class="font-bold">Kafe Angin Semilir</span> berawal dari warung kecil yang dibuka oleh <span class="font-bold">ibu Sitiatun Hasanah</span> pada <span class="font-bold">awal 2024</span>, ketika kawasan persawahan dan tepian sungai sedang ramai karena kangai yang surut. Dari gorengan sederhana, usaha itu tumbuh menjadi tempat makan yang menyediakan ragam hidangan rumahan bagi para pengunjung dan warga sekitar. Seiring waktu, warung tersebut diperluas menjadi kafe yang lebih nyaman, menghadirkan suasana alam yang tenang dengan menu yang terus berkembang hingga hari ini.
            </div>
        </div>

                
            {{-- [TENGAH] Teks Penjelasan Card 2 --}}
             <div class="md:col-span-3 flex justify-center">
        <div class="bg-[#F9A826] rounded-[50px] p-8 shadow-2xl shadow-black/65 text-black text-sm leading-relaxed">
            <p><span class="font-bold">Kafe Angin Semilir</span> dibangun dengan nuansa pedesaan yang hangat, memadukan kayu dan bambu sebagai bagian dari napas ruangannya. Setiap sudut dibiarkan terbuka agar angin dari persawahan dan tepian sungai bisa berkunjung bebas, membawa sejuk yang tenang dan aroma alam yang akrab. Bunga dan tanaman yang dirawat dengan hati menambah rasa damai yang menyelimuti tempat ini.</p>
                    <p>Di sini, pengunjung bisa memilih duduk lesehan, berkumpul di gazebo, atau bersantai di area terbuka sambil menikmati hamparan hijau. Hidangannya sederhana dan rumahan, minumannya segar dan alami, menghadirkan kenyamanan yang terasa dekat dengan kehidupan sehari-hari. Banyak yang datang bukan hanya untuk makan, tetapi juga untuk beristirahat sejenak, menenangkan pikiran, atau menyelesaikan pekerjaan ditemani suara alam.</p>
                    <p><span class="font-bold">Kafe Angin Semilir</span>  tumbuh dari harapan sederhana: menyediakan ruang yang teduh bagi siapa pun yang ingin singgah, merasakan kedamaian, dan pulang dengan hati yang lebih ringan. Tempat kecil di tengah alam ini siap menyambut siapa saja dengan suasana tenang, pemandangan lembut, dan parkiran yang lapang tanpa perlu khawatir.</p>
        </div>
    </div>
    </section>

</div>


{{-- ===== GALERI: POTRET KEINDAHAN (BARU) ===== --}}
<section class="relative container mx-auto px-4 py-16 text-center">
    
    {{-- Judul Galeri --}}
    <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-extrabold text-black mb-4">
            Potret <span class="text-[#F9A826]">Keindahan Kafe Angin Semilir</span>
        </h2>
        <p class="text-black text-lg max-w-3xl mx-auto">
            Tempat ini menyimpan banyak cerita; lewat galeri ini,
            <br>kami ingin membaginya dengan Anda.
        </p>
    </div>

    {{-- Grid Foto (Layout Campuran) --}}
    <div class="space-y-6">
        
        {{-- Baris 1: 3 Foto --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="overflow-hidden rounded-[30px] shadow-lg shadow-black/65 h-[240px] group">
                <img src="{{ asset('images/Galeri 1.jpg') }}" alt="Galeri 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
            <div class="overflow-hidden rounded-[30px] shadow-lg shadow-black/65 h-[240px] group">
                <img src="{{ asset('images/Galeri 2.jpg') }}" alt="Galeri 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
            <div class="overflow-hidden rounded-[30px] shadow-lg shadow-black/65 h-[240px] group">
                <img src="{{ asset('images/Galeri 3.jpg') }}" alt="Galeri 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
        </div>

        {{-- Baris 2: 2 Foto --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="overflow-hidden rounded-[30px] shadow-lg shadow-black/65 h-[240px] group">
                <img src="{{ asset('images/Galeri 4.jpg') }}" alt="Galeri 4" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
            <div class="overflow-hidden rounded-[30px] shadow-lg shadow-black/65 h-[240px] group">
                <img src="{{ asset('images/Galeri 5.jpg') }}" alt="Galeri 5" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
        </div>

        {{-- Baris 3: 3 Foto --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="overflow-hidden rounded-[30px] shadow-lg shadow-black/65 h-[240px] group">
                <img src="{{ asset('images/Galeri 6.jpg') }}" alt="Galeri 6" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
            <div class="overflow-hidden rounded-[30px] shadow-lg shadow-black/65 h-[240px] group">
                <img src="{{ asset('images/Galeri 7.jpg') }}" alt="Galeri 7" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
            <div class="overflow-hidden rounded-[30px] shadow-lg shadow-black/65 h-[240px] group">
                <img src="{{ asset('images/Galeri 8.jpg') }}" alt="Galeri 8" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
        </div>

    </div>

</section>
{{-- ===== AKHIR GALERI ===== --}}

@endsection

@push('scripts') {{-- Adds scripts to the end of body --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        {{-- Initialize Swiper for profile slider --}}
        var swiper = new Swiper(".profilSwiper", {
            effect: "fade",
            fadeEffect: { crossFade: true },
            speed: 1000,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false, 
            },
            loop: true,
        });
    </script>
@endpush