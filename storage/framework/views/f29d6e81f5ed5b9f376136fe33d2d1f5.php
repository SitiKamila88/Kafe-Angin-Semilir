<!-- HTML Document Start -->
<!DOCTYPE html>
<html lang="id">
<!-- Head Section -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Kafe Angin Semilir'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <style>
        html { scroll-behavior: smooth; }

        /* 2. PENGATURAN FONT GLOBAL */
        body {
            /* Font default untuk paragraf/teks kecil */
            font-family: 'Figtree', sans-serif;
            color: #4A4A4A;
        }

        /* Font khusus untuk Judul (h1-h6) dan class .font-baloo */
        h1, h2, h3, h4, h5, h6, .font-baloo {
            font-family: 'Baloo Bhaijaan 2', cursive;
        }
    </style>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<!-- Body Start -->
<body class="overflow-x-hidden">
    <div class="w-full min-h-screen relative bg-[#FFFBF5]">
        <!-- Background Decorative Elements -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute -top-[10rem] -left-[15rem] w-[50rem] h-[50rem] bg-[#F9A826]/30 rounded-full blur-3xl"></div>
            <div class="absolute top-[20rem] -right-[15rem] w-[50rem] h-[50rem] bg-[#F9A826]/30 rounded-full blur-3xl"></div>
            <div class="absolute top-[60rem] -left-[15rem] w-[50rem] h-[50rem] bg-[#F9A826]/30 rounded-full blur-3xl"></div>
            <div class="absolute top-[90rem] -right-[15rem] w-[50rem] h-[50rem] bg-[#F9A826]/30 rounded-full blur-3xl"></div>
        </div>
        <!-- Header Section -->
        <header class="sticky top-4 z-50 container mx-auto px-2 py-1">
            <!-- Navigation Bar putih -->
            <nav class="flex justify-between items-center bg-white/90 backdrop-blur-sm rounded-full shadow-lg px-4 h-15">
                

            <!-- LOGO KAFE NAVBAR ATAS -->
                <div class="flex items-center space-x-3 pl-3">
                    <img src="<?php echo e(asset('images/logo.kafe.png')); ?>" alt="Logo Kafe" class="w-14 h-14 rounded-full object-cover">
                    <a href="<?php echo e(url('/')); ?>" class="text-base font-bold text-gray-800 hidden lg:block">Kafe Angin Semilir</a>
                </div>


                <!-- BUTTON NAVBAR ATAS -->
                <div class="hidden md:flex items-center space-x-2">
                    <div class="flex items-center bg-transparent rounded-full">
                        <a href="<?php echo e(url('/')); ?>" class="<?php echo e(request()->is('/') ? 'bg-[#F9A826] text-white' : 'text-gray-600 hover:bg-gray-100'); ?> px-3 py-1.5 rounded-full font-medium transition-colors text-sm">Beranda</a>
                        <a href="<?php echo e(url('/profil')); ?>" class="<?php echo e(request()->is('profil') ? 'bg-[#F9A826] text-white' : 'text-gray-600 hover:bg-gray-100'); ?> px-3 py-1.5 rounded-full font-medium transition-colors text-sm">Profil</a>
                        <a href="<?php echo e(url('/menu')); ?>" class="<?php echo e(request()->is('menu') ? 'bg-[#F9A826] text-white' : 'text-gray-600 hover:bg-gray-100'); ?> px-3 py-1.5 rounded-full font-medium transition-colors text-sm">Menu</a>
                        <a href="<?php echo e(url('/kontak')); ?>" class="<?php echo e(request()->is('kontak') ? 'bg-[#F9A826] text-white' : 'text-gray-600 hover:bg-gray-100'); ?> px-3 py-1.5 rounded-full font-medium transition-colors text-sm">Alamat & Kontak</a>
                        <a href="<?php echo e(url('/testimoni')); ?>" class="<?php echo e(request()->is('testimoni') ? 'bg-[#F9A826] text-white' : 'text-gray-600 hover:bg-gray-100'); ?> px-3 py-1.5 rounded-full font-medium transition-colors text-sm">Testimoni</a>
                    </div>
                    <a href="#kontak-kami" class="bg-[#F9A826] text-gray-900 px-4 py-2 rounded-full font-semibold border border-gray-200 hover:bg-gray-100 transition-colors shadow-sm text-xs">
                    Pesan Sekarang    
                    </a>
                </div>
                <div class="md:hidden flex justify-between items-center w-full px-3">
                    <a href="<?php echo e(url('/')); ?>" class="text-xl font-bold text-gray-500">Kafe Angin Semilir</a>
                    <button class="text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </nav>
        </header>
        <!-- Main Content Area -->
        <main class="w-full overflow-x-hidden">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <!-- Footer Section -->
        <footer id="kontak-kami" class="bg-[#F9A826] text-black mt-24 relative z-10">
            <div class="container mx-auto px-4 py-16">
                <div class="grid md:grid-cols-3 gap-12">
                    
                    <div>
                        <div class="flex items-center space-x-3 mb-4">
                            <img src="<?php echo e(asset('images/logo.kafe.png')); ?>" alt="Logo Kafe" class="w-24 h-24 rounded-full object-cover">
                            <h3 class="text-xl font-bold">Kafe Angin Semilir</h3>
                        </div>
                        <p class="leading-relaxed text-sm">Kami selalu menyambut kehadiran Anda untuk menikmati hidangan dan suasana hangat bersama Angin Semilir.</p>
                    </div>

                    <div class="space-y-8">
                        
                        <div>
                            <h3 class="text-xl font-bold mb-3">Alamat</h3>
                            <p class="leading-relaxed">
                                <a href="https://www.google.com/maps/search/?api=1&query=Jl.kangay+No.1,+Krajan+II,+Sumbersuko,+Kec.+Klabang,+Kabupaten+Bondowoso" target="_blank" rel="noopener noreferrer">
                                    Jl.kangay No.1, Krajan II, Sumbersuko, Kec. Klabang, Kabupaten Bondowoso, Jawa Timur 68284
                                </a>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">Jam Operasional</h3>
                            <p>Setiap hari 08.00 - 17.00</p>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <div>
                            <h3 class="text-xl font-bold mb-3">Media Sosial</h3>
                            <div class="flex space-x-4">
                               <a href="https://www.instagram.com/kafe.anginsemilir/" target="_blank" class="hover:opacity-70 transition-opacity">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="h-8 w-8" fill="currentColor"><path d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32.036 32.036 0 0 1-32 32Zm52-84a12 12 0 1 1-12-12a12 12 0 0 1 12 12Zm44 12v80a56.063 56.063 0 0 1-56 56H88a56.063 56.063 0 0 1-56-56V88a56.063 56.063 0 0 1 56-56h80a56.063 56.063 0 0 1 56 56Zm-24 0a32.036 32.036 0 0 0-32-32H88a32.036 32.036 0 0 0-32 32v80a32.036 32.036 0 0 0 32 32h80a32.036 32.036 0 0 0 32-32Z"/></svg>
                                </a>

                                <a href="https://twitter.com/kafeanginsemilr" target="_blank" class="hover:opacity-70">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                </a>
                                <a href="https://web.facebook.com/profile.php?id=61583654557286" class="hover:opacity-70 transition-opacity">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v2.385z"/></svg>
                                </a>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">Hubungi Kami</h3>
                            <a href="https://wa.me/6281237064112" target="_blank" class="flex items-center space-x-3 mb-3 hover:opacity-70 transition-opacity">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8" fill="black"><path d="M12 2a10 10 0 00-8.54 15.41L2 22l4.7-1.24A10 10 0 1012 2zm0 18a8 8 0 01-4.09-1.12l-.29-.17-2.79.74.75-2.72-.18-.28A8 8 0 1112 20zm4.25-5.54c-.23-.11-1.36-.67-1.57-.74-.21-.08-.36-.11-.5.11-.15.23-.57.74-.7.89-.13.15-.26.17-.49.06a6.54 6.54 0 01-1.92-1.18A7.22 7.22 0 019.7 11.2c-.1-.23-.01-.36.08-.47.08-.11.23-.28.34-.42.11-.13.15-.23.23-.39.08-.17.04-.32-.02-.45-.06-.11-.5-1.21-.68-1.66-.18-.45-.36-.38-.5-.39h-.43c-.15 0-.39.06-.6.28-.21.23-.8.78-.8 1.9s.82 2.21.93 2.37c.11.15 1.61 2.46 3.92 3.45.55.24.98.38 1.31.49.55.18 1.05.15 1.45.09.44-.07 1.36-.55 1.55-1.09.19-.53.19-.99.13-1.09-.06-.11-.21-.17-.44-.28z"/></svg>
                                <span class="font-medium">+62 812-3706-4112</span>
                            </a>
                            <a href="mailto:kafe.anginsemilir@gmail.com" class="flex items-center space-x-3 mb-3 hover:opacity-70 transition-opacity">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                <span class="font-medium">kafe.anginsemilir@gmail.com</span>
                              </a>
                                    </div>
    </div>
</footer>

<!-- Footer Separator -->
<div class="w-full h-[25px] bg-white"></div>

<!-- Copyright Footer -->
<footer class="bg-[#F6A726] text-black">
    <div class="w-full text-left pl-8 py-2 text-sm text-black">
        Hak Cipta © 2025 Kafe Angin Semilir. Seluruh hak dilindungi.
    </div>
</footer>

<!-- Scripts Section -->
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\laragon\www\semilir2\resources\views/layout.blade.php ENDPATH**/ ?>