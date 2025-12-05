<!-- HTML Head Section -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu - Kafe Angin Semilir</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS Styles -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* 2. PENGATURAN FONT GLOBAL */
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

<!-- Main Body Section -->

<body class="bg-[#FFFBF5] min-h-screen p-6 flex flex-col items-center">

    <!-- LOGO -->
    <div class="w-full max-w-4xl flex items-center gap-3 mb-8">
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" class="w-12 h-12 rounded-full object-cover shadow-md border-2 border-[#F9A826]">
        <h1 class="text-2xl font-bold text-black">Kafe Angin Semilir</h1>
    </div>

    <!-- ===== 1. BACKGROUND BLOB SAMAR-SAMAR (GLOW EFFECT) ===== -->
    <!-- Blob Tengah Besar -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-orange-400/20 rounded-full blur-[120px] blob-animate pointer-events-none z-0"></div>

    <!-- Blob Pojok Kanan Atas -->
    <div class="absolute -top-20 -right-20 w-[500px] h-[500px] bg-orange-300/30 rounded-full blur-[100px] blob-animate-slow pointer-events-none z-0"></div>

    <!-- Blob Pojok Kiri Bawah -->
    <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-orange-300/30 rounded-full blur-[100px] blob-animate pointer-events-none z-0"></div>

    <!-- CARD FORM -->
    <div class="bg-white rounded-[30px] shadow-2xl p-10 w-full max-w-4xl relative overflow-hidden">

        <!-- Judul Form -->
        <h2 class="text-3xl font-bold text-black mb-8">
            Edit <span class="text-[#F9A826]">Data Menu</span>
        </h2>

        <form action="<?php echo e(route('admin.menu.update', $menu->id)); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Nama Menu -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Nama Menu</label>
                <input type="text" name="nama" value="<?php echo e($menu->nama); ?>"
                    class="w-full px-6 py-3 rounded-full bg-gray-200 border-none text-gray-800 focus:ring-2 focus:ring-[#F9A826] focus:bg-white transition-all outline-none"
                    required>
            </div>

            <!-- Harga -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Harga</label>
                <input type="number" name="harga" value="<?php echo e($menu->harga); ?>"
                    class="w-full px-6 py-3 rounded-full bg-gray-200 border-none text-gray-800 focus:ring-2 focus:ring-[#F9A826] focus:bg-white transition-all outline-none"
                    required>
            </div>

            <!-- Deskripsi -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Deskripsi</label>
                <textarea name="deskripsi" rows="2"
                    class="w-full px-6 py-3 rounded-[20px] bg-gray-200 border-none text-gray-800 focus:ring-2 focus:ring-[#F9A826] focus:bg-white transition-all outline-none resize-none"
                    required><?php echo e($menu->deskripsi); ?></textarea>
            </div>

            <!-- Kategori -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Kategori</label>
                <div class="relative">
                    <select name="kategori" class="w-full px-6 py-3 rounded-full bg-gray-200 border-none text-gray-800 focus:ring-2 focus:ring-[#F9A826] focus:bg-white transition-all outline-none appearance-none cursor-pointer" required>
                        <option value="makanan" <?php echo e($menu->kategori == 'makanan' ? 'selected' : ''); ?>>Makanan</option>
                        <option value="minuman" <?php echo e($menu->kategori == 'minuman' ? 'selected' : ''); ?>>Minuman</option>
                    </select>
                    <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-gray-500">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Gambar -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Gambar</label>

                <!-- Preview Gambar Lama -->
                <?php if($menu->foto): ?>
                <div class="mb-3 ml-2">
                    <img src="<?php echo e(asset('foto_menu/'.$menu->foto)); ?>" class="w-24 h-24 object-cover rounded-2xl border-2 border-gray-200 shadow-sm">
                    <p class="text-xs text-gray-400 mt-1">Gambar saat ini</p>
                </div>
                <?php endif; ?>

                <input type="file" name="foto"
                    class="w-full px-6 py-3 rounded-full bg-gray-200 border-none text-gray-500 file:mr-4 file:py-1 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#F9A826] file:text-white hover:file:bg-[#e08e10] cursor-pointer">
            </div>

            <!-- Tombol Aksi -->
            <div class="flex gap-4 mt-8">
                <button type="submit" class="bg-[#F9A826] text-white px-10 py-3 rounded-full font-bold shadow-lg hover:bg-[#e08e10] transition transform hover:-translate-y-1">
                    Update
                </button>
                <a href="<?php echo e(route('admin.menu.index')); ?>" class="bg-[#F9A826] text-white px-10 py-3 rounded-full font-bold shadow-lg hover:bg-[#e08e10] transition transform hover:-translate-y-1 text-center">
                    Kembali
                </a>
            </div>

        </form>
    </div>

</body>

</html><?php /**PATH C:\laragon\www\semilir2\resources\views/admin/menu/edit.blade.php ENDPATH**/ ?>