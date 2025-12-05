<!-- DOCTYPE dan pembuka HTML -->
<!DOCTYPE html>
<html lang="id">
<!-- Bagian Head: Meta, judul, dan link CSS/JS -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Kafe Angin Semilir</title>

    <!-- Script Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Link font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Preconnect untuk font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Link font Baloo Bhaijaan dan Figtree -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Style kustom -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Pengaturan font global */
        body {
            /* Font default untuk paragraf/teks kecil */
            font-family: 'Figtree', sans-serif;
            color: #4A4A4A;
        }

        /* Font khusus untuk Judul (h1-h6) dan class .font-baloo */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-baloo {
            font-family: 'Baloo Bhaijaan 2', cursive;
        }
    </style>
</head>
<!-- Bagian Body: Layout halaman login -->

<body class="bg-[#FFFBF5] min-h-screen flex flex-col items-center justify-center relative overflow-hidden">

    <!-- Logo dan nama kafe di pojok kiri atas -->
    <div class="absolute top-8 left-8 flex items-center gap-3 z-20">
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" class="w-12 h-12 rounded-full object-cover shadow-md border-2 border-[#F9A826]">
        <h1 class="text-2xl font-bold text-gray-800 tracking-wide">Kafe Angin Semilir</h1>
    </div>

    <!-- Background blob samar-samar (glow effect) -->
    <!-- Blob Tengah Besar -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-orange-400/20 rounded-full blur-[120px] blob-animate pointer-events-none z-0"></div>

    <!-- Blob Pojok Kanan Atas -->
    <div class="absolute -top-20 -right-20 w-[500px] h-[500px] bg-orange-300/30 rounded-full blur-[100px] blob-animate-slow pointer-events-none z-0"></div>

    <!-- Blob Pojok Kiri Bawah -->
    <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-orange-300/30 rounded-full blur-[100px] blob-animate pointer-events-none z-0"></div>

    <!-- Kontainer utama login -->
    <div class="relative w-full max-w-[700px] px-4">

        <!-- Card login dengan background gambar -->
        <div class="relative rounded-[40px] shadow-2xl overflow-hidden h-[450px] flex flex-col items-center justify-center">

            <!-- Gambar background frame -->
            <img src="<?php echo e(asset('images/frame-login.jpg')); ?>"
                alt="Background Frame"
                class="absolute inset-0 w-full h-full object-fill z-0">

            <!-- Konten form login -->
            <div class="relative z-10 w-full max-w-sm px-4 text-center mt-4">

                <!-- Judul dan subjudul -->
                <h2 class="text-3xl font-extrabold text-black mb-1">Halo, Admin!</h2>
                <p class="text-gray-600 text-xs mb-6 font-medium">Silakan masuk untuk mengelola menu</p>

                <!-- Pesan error jika ada -->
                <?php if(session('error')): ?>
                <div class="mb-4 bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-2 rounded text-xs shadow-sm">
                    <?php echo e(session('error')); ?>

                </div>
                <?php endif; ?>

                <!-- Form login -->
                <form action="<?php echo e(route('admin.login.submit')); ?>" method="POST" class="space-y-4">
                    <?php echo csrf_field(); ?>

                    <!-- Input username -->
                    <div class="text-left">
                        <label class="block text-xs font-bold text-gray-700 mb-1 ml-3">Nama Pengguna</label>
                        <input type="text" name="username"
                            class="w-full px-5 py-3 rounded-full bg-gray-100 border border-gray-300 text-gray-800 text-sm font-semibold focus:ring-2 focus:ring-[#F9A826] focus:border-[#F9A826] focus:bg-white transition-all outline-none shadow-sm"
                            required>
                    </div>

                    <!-- Input password dengan toggle visibility -->
                    <div class="text-left relative">
                        <label class="block text-xs font-bold text-gray-700 mb-1 ml-3">Kata Sandi</label>
                        <div class="relative">
                            <input type="password" name="password" id="password"
                                class="w-full px-5 py-3 rounded-full bg-gray-100 border border-gray-300 text-gray-800 text-sm font-semibold focus:ring-2 focus:ring-[#F9A826] focus:border-[#F9A826] focus:bg-white transition-all outline-none shadow-sm pr-10"
                                required>
                            <!-- Tombol toggle password -->
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-4 flex items-center text-gray-500 hover:text-[#F9A826] transition">
                                <i class="fa fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Tombol submit -->
                    <div class="pt-4">
                        <button class="bg-[#F9A826] text-white w-full py-3 rounded-full font-bold text-sm shadow-lg hover:bg-[#e08e10] hover:scale-[1.02] transition-all duration-300">
                            Masuk
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <!-- Footer copyright -->
        <div class="text-center mt-6 text-gray-400 text-[10px] font-medium tracking-wide">
            Hak Cipta © 2025 Kafe Angin Semilir. Seluruh hak dilindungi.
        </div>

    </div>

    <!-- Script JavaScript untuk toggle password -->
    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            var icon = document.getElementById("eyeIcon");
            if (x.type === "password") {
                x.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                x.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>

</body>

</html><?php /**PATH C:\laragon\www\semilir2\resources\views/admin/login.blade.php ENDPATH**/ ?>