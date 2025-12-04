

<?php $__env->startSection('title', 'Menu - Kafe Angin Semilir'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .swiper { 
        /* Padding atas tinggi biar kepala piring/gelas aman */
        padding-top: 100px !important; 
        
        /* Padding bawah buat bayangan card */
        padding-bottom: 50px !important;
        
        /* --- PERBAIKAN DISINI --- */
        /* 1. HAPUS margin negatif yang bikin konten keluar layar monitor */
        margin: 0 !important;

        /* 2. Padding Kiri secukupnya */
        padding-left: 20px !important; 

        /* 3. Padding Kanan DIBESARKAN (50px). 
           Ini bikin "tembok" slider geser ke kiri sedikit, 
           memberi ruang kosong buat gelas yang menonjol ke kanan. */
        padding-right: 50px !important;

        /* 4. Tetap paksa overflow visible */
        overflow: visible !important; 
    }

    .swiper-slide { 
        height: auto; 
        display: flex; 
        overflow: visible !important;
        z-index: 10; /* Pastikan layer aman */
    }
    
    .swiper-wrapper {
        z-index: 10;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container mx-auto px-4 pt-16 text-center">
        <h2 class="text-3xl md:text-5xl font-extrabold mb-4 leading-tight text-gray-800">
            Daftar <span class="text-[#F9A826]">Menu Makanan</span>
        </h2>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto mb-8">
            Hidangan kami dibuat dengan rasa rumahan dan bahan segar. Pilih menu favoritmu dan nikmati kelezatan sederhana sejak suapan pertama.
        </p>
    </div>

    <section class="container mx-auto px-4 pb-12 relative">
        <div class="swiper menuSwiper">
            <div class="swiper-wrapper">


                                                    <?php $__empty_1 = true; $__currentLoopData = $makanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="swiper-slide h-auto px-2">
    
    <div class="relative w-full h-full flex flex-col mt-4 group"> 

        
        <div class="absolute -top-20 left-1/2 -translate-x-1/2 w-48 h-48 z-20">
            
            
            <div class="w-full h-full rounded-full flex items-center justify-center relative z-10">
                <?php if($menu->foto): ?>
                    
                    <img src="<?php echo e(asset('foto_menu/' . $menu->foto)); ?>" alt="<?php echo e($menu->nama); ?>" 
                         class="w-full h-full object-cover rounded-full drop-shadow-2xl transition-transform duration-300 group-hover:scale-110">
                <?php else: ?>
                    <div class="w-full h-full rounded-full flex items-center justify-center text-gray-400 bg-gray-100 shadow-lg">No Image</div>
                <?php endif; ?>
            </div>

            
            
            <div class="absolute bottom-2 right-2 translate-x-1/4 translate-y-1/4 bg-white w-16 h-16 flex items-center justify-center rounded-full shadow-xl z-30 transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">
                <div class="text-center leading-none">
                    <span class="block text-[9px] text-gray-500 font-bold uppercase tracking-tighter">Harga</span>
                    <span class="font-black text-xl text-gray-900 tracking-tight"><?php echo e(number_format($menu->harga / 1000, 0)); ?>k</span>
                </div>
            </div>
        </div>

        
        <div class="bg-[#FF9F1C] rounded-t-[80px] rounded-b-[30px] pt-32 pb-8 px-6 shadow-lg shadow-orange-500/20 w-full text-left hover:shadow-xl transition-shadow duration-300 min-h-[260px] flex flex-col">
            <h3 class="text-2xl font-black text-black mb-2 leading-tight"><?php echo e($menu->nama); ?></h3>
            <p class="text-sm text-black/80 leading-snug line-clamp-4 font-medium">
                <?php echo e($menu->deskripsi); ?>

            </p>
        </div>

    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="w-full text-center py-10 text-gray-500 italic">Belum ada menu makanan.</div>
<?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>




    
    <div class="container mx-auto px-4 pt-12 text-center">
        <h2 class="text-3xl md:text-5xl font-extrabold mb-4 leading-tight text-gray-800">
            Daftar <span class="text-[#F9A826]">Menu Minuman</span>
        </h2>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto mb-8">
            Pilihan minuman kami hadir untuk menemani waktu santaimu, dari yang hangat hingga yang menyegarkan. Setiap tegukan membawa rasa sederhana yang pas dinikmati bersama suasana tenang Kafe Angin Semilir.
        </p>
    </div>

    <section class="container mx-auto px-6 pb-24 relative">
        <div class="swiper menuSwiper">
            <div class="swiper-wrapper">
                                           <?php $__empty_1 = true; $__currentLoopData = $minumans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="swiper-slide h-auto px-2">
    <div class="relative w-full h-full flex flex-col mt-4 group">

        
        
        <div class="absolute -top-20 left-1/2 -translate-x-1/2 w-48 h-48 z-20">
            
            
            
            <div class="w-full h-full flex items-center justify-center relative z-10">
                <?php if($menu->foto): ?>
                    
                    
                    
                    
                    <img src="<?php echo e(asset('foto_menu/' . $menu->foto)); ?>" alt="<?php echo e($menu->nama); ?>" 
                         class="w-full h-full object-contain drop-shadow-2xl transition-transform duration-300 transform scale-110 group-hover:scale-125">
                <?php else: ?>
                    <div class="w-full h-full rounded-full flex items-center justify-center text-gray-400 bg-gray-100 shadow-lg">No Image</div>
                <?php endif; ?>
            </div>

            
            <div class="absolute bottom-2 right-2 translate-x-1/4 translate-y-1/4 bg-white w-16 h-16 flex items-center justify-center rounded-full shadow-xl z-30 transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">
                <div class="text-center leading-none">
                    <span class="block text-[9px] text-gray-500 font-bold uppercase tracking-tighter">Harga</span>
                    <span class="font-black text-xl text-gray-900 tracking-tight"><?php echo e(number_format($menu->harga / 1000, 0)); ?>k</span>
                </div>
            </div>
        </div>

        
        <div class="bg-[#FF9F1C] rounded-t-[80px] rounded-b-[30px] pt-32 pb-8 px-6 shadow-lg shadow-orange-500/20 w-full text-left hover:shadow-xl transition-shadow duration-300 min-h-[260px] flex flex-col">
            <h3 class="text-2xl font-black text-black mb-2 leading-tight"><?php echo e($menu->nama); ?></h3>
            <p class="text-sm text-black/80 leading-snug line-clamp-4 font-medium">
                <?php echo e($menu->deskripsi); ?>

            </p>
        </div>

    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="w-full text-center py-10 text-gray-500 italic">Belum ada menu minuman.</div>
<?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
 <section class="relative container mx-auto px-4 pb-32 pt-8 text-center">
        <h2 class="text-3xl md:text-5xl font-extrabold mb-6 text-black">
            Ingin <span class="text-[#FF9F1C]">Menikmati Hidangan</span> Kami?
        </h2>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
            Yuk pesan sekarang, lalu datang dan nikmati hidangan Kafe Angin Semilir ditemani suasana alam yang tenang.
        </p>
    <section class="relative container mx-auto px-4 pb-24 text-center">
        <a href="https://wa.me/6281237064112?text=Halo%20Admin%20Kafe%20Angin%20Semilir,%20saya%20ingin%20memesan%20menu." 
                    target="_blank"
                    class="inline-block bg-[#F9A826] text-white px-10 py-3 rounded-full font-semibold text-lg hover:bg-[#E79A24] transition-colors shadow-lg shadow-orange-500/20 tracking-wider">
            
                    Pesan Sekarang
                </a>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiperConfig = {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            
            //  AUTOPLAY 2 DETIK
            autoplay: {
                delay: 1700,
                disableOnInteraction: false, // Tetap lanjut setelah interaksi
                pauseOnMouseEnter: true // Pause saat hover
            },
            
            //  SCROLL NATURAL
            touchStartPreventDefault: false,
            preventInteractionOnTransition: false,
            simulateTouch: true,
            touchRatio: 1,
            threshold: 0,
            shortSwipes: true,
            longSwipes: true,
            followFinger: true,
            
            //  FREE MODE UNTUK SCROLL NATURAL
            freeMode: {
                enabled: true,
                momentum: true,
                momentumRatio: 1.5,
                momentumBounce: false,
                sticky: false
            },

            //  MOUSEWHEEL UNTUK SCROLL DENGAN WHEEL
            mousewheel: {
                enabled: true,
                forceToAxis: true,
                thresholdDelta: 5
            },

            grabCursor: true,
            speed: 800,
            
            //  PAGINATION (BULET-BULET KECIL)
            pagination: { 
                el: ".swiper-pagination", 
                clickable: true, 
                dynamicBullets: true 
            },
            
            breakpoints: {
                640: { 
                    slidesPerView: 2, 
                    spaceBetween: 20
                },
                1024: { 
                    slidesPerView: 4, 
                    spaceBetween: 30
                },
            },
            
            //  EVENT HANDLER UNTUK JAGA AUTOPLAY
            on: {
                init: function() {
                    this.touchEventsData.startPreventDefault = false;
                },
                touchEnd: function() {
                    // Restart autoplay setelah drag
                    setTimeout(() => {
                        this.autoplay.start();
                    }, 100);
                }
            }
        };

        // Inisialisasi semua slider
        var swipers = document.querySelectorAll('.menuSwiper');
        swipers.forEach(function(sw) {
            var swiperInstance = new Swiper(sw, swiperConfig);
            
            // Force settings
            swiperInstance.touchEventsData.startPreventDefault = false;
            
            //  RESTART AUTOPLAY SETELAH KLIK PAGINATION
            swiperInstance.el.addEventListener('click', function(e) {
                if (e.target.closest('.swiper-pagination-bullet')) {
                    setTimeout(() => {
                        swiperInstance.autoplay.start();
                    }, 100);
                }
            });
        });

        //  CSS UNTUK SCROLL NATURAL
        const style = document.createElement('style');
        style.textContent = `
            .menuSwiper {
                cursor: grab !important;
                -webkit-overflow-scrolling: touch !important;
            }
            .menuSwiper:active {
                cursor: grabbing !important;
            }
        `;
        document.head.appendChild(style);
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\semilir\resources\views/menu.blade.php ENDPATH**/ ?>