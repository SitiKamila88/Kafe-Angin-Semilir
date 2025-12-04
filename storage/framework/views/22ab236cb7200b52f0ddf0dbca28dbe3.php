<!-- Halaman sukses login admin -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Berhasil - Kafe Angin Semilir</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"> 

    <style>
        /* Mengatur Font Default Body ke Figtree (Teks Biasa) */
        body { font-family: 'Figtree', sans-serif; }

        /* Mengatur Heading (h1-h6) ke Baloo Bhaijaan 2 (Judul) */
        h1, h2, h3, h4, h5, h6 { font-family: 'Baloo Bhaijaan 2', cursive; }

        /* Animasi muncul dari agak bawah ke posisi final (TETAP SAMA) */
        .fade-in { animation: fadeIn 0.8s cubic-bezier(0.22, 1, 0.36, 1); }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(40px) scale(0.95); } to { opacity: 1; transform: translateY(0) scale(1); } }
        
        @keyframes loading {
            0% { width: 0%; }
            100% { width: 100%; }
        }
    </style>
</head>
<body class="bg-[#FFFBF5] min-h-screen flex flex-col items-center justify-center relative overflow-hidden">

    <!-- Logo kafe di pojok kiri atas -->
    <!-- LOGO -->
    <div class="absolute top-8 left-8 flex items-center gap-3 z-20">
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" class="w-12 h-12 rounded-full object-cover shadow-md border-2 border-[#F9A826]">
        <h1 class="text-2xl font-bold text-gray-800 tracking-wide">Kafe Angin Semilir</h1>
    </div>

    <!-- Efek background blob samar-samar -->
    <!-- ===== 1. BACKGROUND BLOB SAMAR-SAMAR (GLOW EFFECT) ===== -->
    <!-- Blob Tengah Besar -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-orange-400/20 rounded-full blur-[120px] blob-animate pointer-events-none z-0"></div>
    
    <!-- Blob Pojok Kanan Atas -->
    <div class="absolute -top-20 -right-20 w-[500px] h-[500px] bg-orange-300/30 rounded-full blur-[100px] blob-animate-slow pointer-events-none z-0"></div>
    
    <!-- Blob Pojok Kiri Bawah -->
    <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-orange-300/30 rounded-full blur-[100px] blob-animate pointer-events-none z-0"></div>

    <!-- Kartu notifikasi sukses -->
    <!-- CARD NOTIFIKASI -->
    <!-- Tambahkan -mt-24 agar posisi naik ke atas (tidak pas di tengah) -->
    <div class="relative w-full max-w-[801px] px-4 fade-in -mt-24">
        
        <!-- Container Kartu -->
        <!-- Tetap h-[215px] agar pas dengan frame gambar -->
        <div class="relative rounded-[30px] shadow-xl overflow-hidden h-[215px] flex flex-col items-center justify-center text-center">
            
            <!-- Background image kartu -->
            <!-- 1. BACKGROUND IMAGE -->
            <img src="<?php echo e(asset('images/popup.png')); ?>" 
                 alt="Background Popup" 
                 class="absolute inset-0 w-full h-full object-fill z-0">

            <!-- Konten teks di dalam kartu -->
            <!-- 2. KONTEN TEKS -->
            <div class="relative z-10 w-full px-16 py-4 mt-1">
                
                <h2 class="text-2xl md:text-3xl font-extrabold text-black mb-2 tracking-tight">
                    Yeayy, kamu <span class="text-[#F9A826]">berhasil masuk!</span>
                </h2>
                
                <p class="text-gray-500 text-xs md:text-sm font-medium max-w-lg mx-auto leading-snug">
                    Sekarang kamu bisa mulai mengelola dan mengedit menu Kafe Angin Semilir dengan mudah.
                </p>
                
                <!-- Loading bar animasi -->
                <!-- Loading Bar -->
                <div class="mt-4 flex flex-col items-center gap-1">
                    <div class="w-32 h-1.5 bg-gray-100 rounded-full overflow-hidden border border-gray-200">
                        <div class="h-full bg-[#F9A826] animate-[loading_3s_ease-in-out_forwards]" style="width: 0%"></div>
                    </div>
                    <p class="text-[9px] text-gray-400 font-bold uppercase tracking-widest">Memuat Dashboard...</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Script pengalihan otomatis ke dashboard -->
    <!-- SCRIPT PENGALIHAN -->
    <script>
        setTimeout(function() {
            window.location.href = "<?php echo e(route('admin.menu.index')); ?>";
        }, 3000);
    </script>

</body>
</html><?php /**PATH C:\laragon\www\semilir2\resources\views/admin/success.blade.php ENDPATH**/ ?>