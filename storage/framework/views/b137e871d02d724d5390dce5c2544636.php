

<?php $__env->startSection('title', 'Kafe Angin Semilir - Beranda'); ?>


<?php $__env->startPush('styles'); ?>
<style>
    @keyframes float-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    .animate-float {
        animation: float-slow 4s ease-in-out infinite;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <section class="relative w-full pt-24 pb-32 overflow-hidden -mt-24">
        

        
        
        <div class="container mx-auto px-4 relative z-10 grid md:grid-cols-2 gap-8 items-center h-full">
            
            
            <div class="text-center md:text-left pt-12">
                <span class="inline-block bg-[#F9A826]/20 text-[#F9A826] font-semibold px-5 py-2 rounded-full uppercase text-sm tracking-wider mb-4">
                    Rasa Asli, Suasana Alami
                </span>
                
                <h1 class="text-5xl md:text-6xl font-extrabold my-4 leading-tight text-gray-900">
                    Saat Rasa Berpadu <br> Dengan <span class="text-[#F9A826]">Semilir</span> yang <br>Menenangkan <span class="text-[#F9A826]">Jiwa</span>
                </h1>
                
                <p class="text-gray-600 mb-8 text-lg max-w-md mx-auto md:mx-0">
                    Nikmati hidangan lezat dengan cita rasa rumahan dan suasana alami yang menenangkan hanya di Kafe Angin Semilir.
                </p>
                
                <div class="flex items-center gap-2 mt-2 mb-6 justify-center md:justify-start">
                    <span class="font-baloo font-bold text-lg text-gray-900">4,9</span>
                    <div class="flex text-[#FFD700] text-sm">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>

                <a href="https://wa.me/6281237064112" target="_blank" class="inline-block bg-[#F9A826] text-white px-10 py-3 rounded-full font-semibold text-lg hover:bg-[#E79A24] transition-colors shadow-lg shadow-orange-500/20 tracking-wider">
                    Pesan Sekarang
                </a>
            </div>
            
            
            <div class="relative h-[600px] w-full hidden md:flex items-center justify-center">
                
                
                <img src="<?php echo e(asset('images/dauns.svg')); ?>" class="absolute top-0 right-10 w-24 z-50 animate-float">
                <img src="<?php echo e(asset('images/dauns.svg')); ?>" class="absolute bottom-20 left-0 w-20 z-50 opacity-80 animate-float" style="animation-delay: 1s;">
                <img src="<?php echo e(asset('images/dauns.svg')); ?>" class="absolute top-1/2 right-0 w-16 z-50 opacity-70 animate-float" style="animation-delay: 2s;">

                
                
                <img src="<?php echo e(asset('images/ayam_display.png')); ?>" class="absolute top-10 right-0 w-64 h-auto object-contain z-20 drop-shadow-2xl transition-transform hover:scale-105">
                
                
                <img src="<?php echo e(asset('images/telur_display.png')); ?>" class="absolute bottom-10 left-4 w-64 h-auto object-contain z-20 drop-shadow-2xl transition-transform hover:scale-105">

                
                
                <img src="<?php echo e(asset('images/nila_display.png')); ?>" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[480px] h-auto object-contain z-30 drop-shadow-[0_35px_35px_rgba(0,0,0,0.3)] transition-transform hover:scale-110">

            </div>

        </div>
    </section>

    
    <section class="relative container mx-auto px-4 py-16 md:py-24">
       <div class="text-center max-w-4xl mx-auto mb-16">
            <h2 class="font-baloo text-4xl lg:text-4xl font-extrabold leading-tight text-gray-900 mb-6">
                Selamat Datang di <span class="text-[#F9A826]">Kafe Angin Semilir</span>
            </h2>
            <p class="text-gray-600 text-lg font-medium leading-relaxed">
                Kami percaya setiap momen indah tumbuh dari suasana yang tenang dan rasa yang terjaga. Di sini, Anda bisa menikmati hidangan yang memanjakan lidah sambil memberi ruang bagi hati untuk bernafas lega.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto"> 
            <div class="grid grid-cols-2 gap-4 h-[450px]"> 
                <div class="row-span-2 relative h-full">
                    <img src="<?php echo e(asset('images/pintumasuk.jpeg')); ?>" class="w-full h-full object-cover shadow-xl rounded-tl-[80px] rounded-br-[80px] rounded-tr-none rounded-bl-none hover:scale-[1.02] transition-transform duration-500">
                </div>
                <div class="relative h-[217px]"> 
                    <img src="<?php echo e(asset('images/Galeri 2.jpg')); ?>" class="w-full h-full object-cover shadow-xl rounded-tr-[60px] rounded-bl-[60px] rounded-tl-none rounded-br-none hover:scale-[1.02] transition-transform duration-500">
                </div>
                <div class="relative h-[217px]"> 
                    <img src="<?php echo e(asset('images/pintumasuk2.jpeg')); ?>" class="w-full h-full object-cover shadow-xl rounded-tr-[60px] rounded-bl-[60px] rounded-tl-none rounded-br-none hover:scale-[1.02] transition-transform duration-500">
                </div>
            </div>

            <div class="text-left pl-0 lg:pl-10">
                <p class="text-gray-700 text-lg leading-relaxed mb-8">
                    Di tengah sawah dan tepi sungai, kafe ini menawarkan kesejukan alami dan ketenangan yang menyejukkan jiwa. Bangunannya dari kayu dan bambu, dihiasi tanaman dan bunga — sederhana, hangat, dan sangat bersahaja. Cocok untuk makan santai, ngobrol, atau sekadar menepi sejenak dari keramaian.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo e(url('/profil')); ?>" class="inline-flex items-center justify-center bg-[#F9A826] text-white px-8 py-3 rounded-full font-bold shadow-lg shadow-orange-500/20 hover:bg-[#E79A24] transition-transform hover:scale-105">
                        Lebih Lanjut <i class="fas fa-chevron-right ml-2 text-sm"></i>
                    </a>
                    <a href="<?php echo e(url('/kontak')); ?>" class="inline-flex items-center justify-center bg-[#F9A826] text-white px-8 py-3 rounded-full font-bold shadow-lg shadow-orange-500/20 hover:bg-[#E79A24] transition-transform hover:scale-105">
                        Hubungi Kami <i class="fas fa-chevron-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="relative container mx-auto px-4 py-16 md:py-24 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-4">
            <span class="text-[#F9A826]">Menu Terlaris</span> <span class="text-gray-900">Kami</span>
        </h2>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-20">
            Temukan hidangan spesial yang selalu jadi andalan para pelanggan dari hari ke hari.
        </p>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-6 gap-y-24">
            <div class="relative w-full mt-8 group text-left">
                <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-36 h-36 z-20">
                    <img src="<?php echo e(asset('images/nila_display.png')); ?>" alt="Lalapan Nila" class="w-full h-full object-cover rounded-full drop-shadow-2xl transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 right-0 bg-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg z-30 transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">
                        <span class="font-black text-sm text-gray-900">15k</span>
                    </div>
                </div>
                <div class="bg-[#F9A826] rounded-t-[60px] rounded-b-[20px] pt-24 pb-6 px-4 shadow-lg shadow-orange-500/30 h-full flex flex-col">
                    <h3 class="text-lg font-black text-black leading-tight mb-2">Lalapan Nila</h3>
                    <p class="text-xs text-black/80 font-medium leading-relaxed line-clamp-4">
                        Nila goreng renyah dengan bumbu meresap, disajikan dengan lalapan segar dan sambal terasi.
                    </p>
                </div>
            </div>
            
            <div class="relative w-full mt-8 group text-left">
                <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-36 h-36 z-20">
                    <img src="<?php echo e(asset('images/ayam_display.png')); ?>" alt="Lalapan Ayam" class="w-full h-full object-cover rounded-full drop-shadow-2xl transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 right-0 bg-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg z-30 transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">
                        <span class="font-black text-sm text-gray-900">12k</span>
                    </div>
                </div>
                <div class="bg-[#F9A826] rounded-t-[60px] rounded-b-[20px] pt-24 pb-6 px-4 shadow-lg shadow-orange-500/30 h-full flex flex-col">
                    <h3 class="text-lg font-black text-black leading-tight mb-2">Lalapan Ayam</h3>
                    <p class="text-xs text-black/80 font-medium leading-relaxed line-clamp-4">
                        Ayam goreng empuk dengan bumbu rempah pilihan, favorit semua kalangan.
                    </p>
                </div>
            </div>

            <div class="relative w-full mt-8 group text-left">
                <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-36 h-36 z-20">
                    <img src="<?php echo e(asset('images/telur_display.png')); ?>" alt="Lalapan Telur" class="w-full h-full object-cover rounded-full drop-shadow-2xl transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 right-0 bg-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg z-30 transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">
                        <span class="font-black text-sm text-gray-900">10k</span>
                    </div>
                </div>
                <div class="bg-[#F9A826] rounded-t-[60px] rounded-b-[20px] pt-24 pb-6 px-4 shadow-lg shadow-orange-500/30 h-full flex flex-col">
                    <h3 class="text-lg font-black text-black leading-tight mb-2">Lalapan Telur</h3>
                    <p class="text-xs text-black/80 font-medium leading-relaxed line-clamp-4">
                        Telur mata sapi atau dadar dengan sambal dan lalapan, menu hemat yang nikmat.
                    </p>
                </div>
            </div>

            <div class="relative w-full mt-8 group text-left">
                <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-36 h-36 z-20">
                    <img src="<?php echo e(asset('images/penyet_display.png')); ?>" alt="Tempe Penyet" class="w-full h-full object-cover rounded-full drop-shadow-2xl transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 right-0 bg-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg z-30 transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">
                        <span class="font-black text-sm text-gray-900">8k</span>
                    </div>
                </div>
                <div class="bg-[#F9A826] rounded-t-[60px] rounded-b-[20px] pt-24 pb-6 px-4 shadow-lg shadow-orange-500/30 h-full flex flex-col">
                    <h3 class="text-lg font-black text-black leading-tight mb-2">Tempe Penyet</h3>
                    <p class="text-xs text-black/80 font-medium leading-relaxed line-clamp-4">
                        Tempe goreng yang dipenyet dengan sambal bawang pedas nampol.
                    </p>
                </div>
            </div>

            <div class="relative w-full mt-8 group text-left">
                <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-36 h-36 z-20">
                    <img src="<?php echo e(asset('images/pecel_display.png')); ?>" alt="Nasi Pecel" class="w-full h-full object-cover rounded-full drop-shadow-2xl transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 right-0 bg-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg z-30 transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">
                        <span class="font-black text-sm text-gray-900">12k</span>
                    </div>
                </div>
                <div class="bg-[#F9A826] rounded-t-[60px] rounded-b-[20px] pt-24 pb-6 px-4 shadow-lg shadow-orange-500/30 h-full flex flex-col">
                    <h3 class="text-lg font-black text-black leading-tight mb-2">Nasi Pecel</h3>
                    <p class="text-xs text-black/80 font-medium leading-relaxed line-clamp-4">
                        Sayuran rebus disiram bumbu kacang kental khas desa, sehat dan lezat.
                    </p>
                </div>
            </div>
        </div>

        <a href="<?php echo e(url('/menu')); ?>" class="inline-flex items-center justify-center bg-[#F9A826] text-white px-10 py-3 rounded-full font-bold text-lg shadow-lg shadow-orange-500/20 hover:bg-[#E79A24] transition-transform hover:scale-105 mt-20 tracking-wider">
            Lihat Menu Lainnya
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </section>
    <section class="relative container mx-auto px-4 pt-16 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-4">
            <span class="text-[#F9A826]">Layanan</span> <span class="text-gray-900">Kami</span>
        </h2>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-12">
            Memudahkan Anda Menikmati Hidangan Kafe Angin Semilir
        </p>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="bg-white rounded-[40px] shadow-lg p-8 grid md:grid-cols-12 gap-6 items-center transition-transform duration-300 hover:scale-105">
                <div class="md:col-span-4 text-center md:text-left">
                    <h3 class="text-3xl font-bold text-gray-900 leading-tight">Bawa</h3>
                    <h3 class="text-3xl font-bold text-[#F9A826] leading-tight">Pulang</h3>
                </div>
                <div class="md:col-span-8 text-center md:text-left">
                    <p class="text-gray-600 text-lg">Bawa pulang cita rasa Kafe Angin Semilir dengan kemasan rapi dan tetap hangat.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-[40px] shadow-lg p-8 grid md:grid-cols-12 gap-6 items-center transition-transform duration-300 hover:scale-105">
                <div class="md:col-span-4 text-center md:text-left">
                    <h3 class="text-3xl font-bold text-gray-900 leading-tight">Makan</h3>
                    <h3 class="text-3xl font-bold text-[#F9A826] leading-tight">Di Tempat</h3>
                </div>
                <div class="md:col-span-8 text-center md:text-left">
                    <p class="text-gray-600 text-lg">Rasakan ketenangan dan suasana alam sambil menikmati hidangan khas kami.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-[40px] shadow-lg p-8 grid md:grid-cols-12 gap-6 items-center transition-transform duration-300 hover:scale-105">
                <div class="md:col-span-4 text-center md:text-left">
                    <h3 class="text-3xl font-bold text-[#F9A826] leading-tight">Reservasi</h3>
                </div>
                <div class="md:col-span-8 text-center md:text-left">
                    <p class="text-gray-600 text-lg">Lakukan reservasi terlebih dahulu agar kunjunganmu lebih nyaman dan tidak perlu menunggu lama.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative container mx-auto px-4 pt-16 pb-24 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-8">
            <span class="text-[#F9A826]">Fasilitas</span> <span class="text-gray-900">Kami</span>
        </h2>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-12">
            Ruang nyaman yang dirancang agar setiap singgah terasa lebih tenang.
        </p>
        <div class="max-w-4xl mx-auto space-y-4">
            <div class="bg-white rounded-full shadow-md p-6 px-10 flex flex-col md:flex-row items-center gap-6 transition-transform duration-300 hover:scale-105">
                <div class="md:w-1/3 text-center md:text-left">
                    <h3 class="text-2xl font-bold text-gray-900">Free <span class="text-[#F9A826]">Wi-Fi</span></h3>
                </div>
                <div class="md:w-2/3 text-center md:text-left">
                    <p class="text-gray-600 text-lg">Akses Internet gratis untuk mendukung aktivitas anda</p>
                </div>
            </div>
            <div class="bg-white rounded-full shadow-md p-6 px-10 flex flex-col md:flex-row items-center gap-6 transition-transform duration-300 hover:scale-105">
                <div class="md:w-1/3 text-center md:text-left">
                    <h3 class="text-2xl font-bold text-gray-900"><span class="text-[#F9A826]">Karaoke</span></h3>
                </div>
                <div class="md:w-2/3 text-center md:text-left">
                    <p class="text-gray-600 text-lg">Peralatan Karaoke untuk bernyanyi santai</p>
                </div>
            </div>
            <div class="bg-white rounded-full shadow-md p-6 px-10 flex flex-col md:flex-row items-center gap-6 transition-transform duration-300 hover:scale-105">
                <div class="md:w-1/3 text-center md:text-left">
                    <h3 class="text-2xl font-bold text-gray-900"><span class="text-[#F9A826]">Gazebo</span> Outdoor</h3>
                </div>
                <div class="md:w-2/3 text-center md:text-left">
                    <p class="text-gray-600 text-lg">Tempat duduk terbuka dengan suasana sejuk persawahan dan sungai</p>
                </div>
            </div>
            <div class="bg-white rounded-full shadow-md p-6 px-10 flex flex-col md:flex-row items-center gap-6 transition-transform duration-300 hover:scale-105">
                <div class="md:w-1/3 text-center md:text-left">
                    <h3 class="text-2xl font-bold text-gray-900"><span class="text-[#F9A826]">Lesehan</span> Sejuk</h3>
                </div>
                <div class="md:w-2/3 text-center md:text-left">
                    <p class="text-gray-600 text-lg">Area lesehan yang nyaman dengan suasana sejuk</p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative container mx-auto px-4 py-16 md:py-24 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-4">
            <span class="text-gray-900">Apa Yang</span>
            <span class="text-[#F9A826]">Pelanggan</span>
            <span class="text-gray-900">Kami</span>
            <span class="text-[#F9A826]">Katakan?</span>
        </h2>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-12">
            Ulasan jujur dari para pelanggan yang telah menikmati kehangatan Kafe Angin Semilir.
        </p>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-[40px] p-8 text-left shadow-lg shadow-gray-500/10 transition-transform duration-300 hover:scale-105">
                <div class="flex items-center mb-4">
                    <img src="<?php echo e(asset('images/acuy.png')); ?>" alt="Profil acuy" class="w-16 h-16 rounded-full mr-4 object-cover">
                    <div>
                        <h4 class="font-bold text-lg text-gray-900">Acuy</h4>
                        <div class="flex text-yellow-400">
                               <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 text-lg">"Porsinya ngenyangin rasanya enak sedep, td jg pesen yg nila enak bgtt, bumbunya nyatu, krispi juga"</p>
            </div>
            <div class="bg-white rounded-[40px] p-8 text-left shadow-lg shadow-gray-500/10 transition-transform duration-300 hover:scale-105">
                <div class="flex items-center mb-4">
                    <img src="<?php echo e(asset('images/ginger.png')); ?>" alt="Profil Ginger Lovers" class="w-16 h-16 rounded-full mr-4 object-cover">
                    <div>
                        <h4 class="font-bold text-lg text-gray-900">Ginger Lovers</h4>
                        <div class="flex text-yellow-400">
                               <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 text-lg">"Seperti makan di rumah nenek, makanan dan tempatnya 10/10"</p>
            </div>
            <div class="bg-white rounded-[40px] p-8 text-left shadow-lg shadow-gray-500/10 transition-transform duration-300 hover:scale-105">
                <div class="flex items-center mb-4">
                    <img src="<?php echo e(asset('images/jejhe cacha.png')); ?>" alt="Profil Maya Putri" class="w-16 h-16 rounded-full mr-4 object-cover">
                    <div>
                        <h4 class="font-bold text-lg text-gray-900">jejhe Cacha</h4>
                        <div class="flex text-yellow-400">
                               <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 text-lg">
                    "Mantab tempat makan, ngopi dan nongkrong disini. Asli semilir pedesaan ✨"
                </p>
            </div>
        </div>

        <a href="<?php echo e(url('/testimoni')); ?>" class="inline-flex items-center justify-center bg-[#F9A826] text-white px-10 py-3 rounded-full font-semibold text-lg hover:bg-[#E79A24] transition-colors mt-20 shadow-lg shadow-orange-500/20 tracking-wider">
            Lebih Lanjut
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\semilir\resources\views/kafe.blade.php ENDPATH**/ ?>