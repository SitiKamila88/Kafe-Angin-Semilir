<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu - Kafe Angin Semilir</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-[#FFFBF5] min-h-screen p-6 flex flex-col items-center">

    <!-- LOGO (Pojok Kiri Atas) -->
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
            Tambah <span class="text-[#F9A826]">Data Menu Baru</span>
        </h2>

        <form action="<?php echo e(route('admin.menu.store')); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
            <?php echo csrf_field(); ?>

            <!-- Nama Menu -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Nama Menu</label>
                <input type="text" name="nama" 
                       class="w-full px-6 py-3 rounded-full bg-gray-200 border-none text-gray-800 focus:ring-2 focus:ring-[#F9A826] focus:bg-white transition-all outline-none"
                       required>
            </div>

            <!-- Harga -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Harga</label>
                <input type="number" name="harga" 
                       class="w-full px-6 py-3 rounded-full bg-gray-200 border-none text-gray-800 focus:ring-2 focus:ring-[#F9A826] focus:bg-white transition-all outline-none"
                       required>
            </div>

            <!-- Deskripsi -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Deskripsi</label>
                <!-- Textarea dibuat rounded juga biar seragam -->
                <textarea name="deskripsi" rows="2"
                          class="w-full px-6 py-3 rounded-[20px] bg-gray-200 border-none text-gray-800 focus:ring-2 focus:ring-[#F9A826] focus:bg-white transition-all outline-none resize-none"
                          required></textarea>
            </div>

            <!-- Kategori (Dropdown) -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Kategori</label>
                <div class="relative">
                    <select name="kategori" class="w-full px-6 py-3 rounded-full bg-gray-200 border-none text-gray-800 focus:ring-2 focus:ring-[#F9A826] focus:bg-white transition-all outline-none appearance-none cursor-pointer" required>
                        <option value="" disabled selected>-- Pilih Kategori --</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                    </select>
                    <!-- Panah Dropdown Custom -->
                    <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-gray-500">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>
                    </div>
                </div>
            </div>

            <!-- Gambar -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Gambar</label>
                <input type="file" name="foto" 
                       class="w-full px-6 py-3 rounded-full bg-gray-200 border-none text-gray-500 file:mr-4 file:py-1 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#F9A826] file:text-white hover:file:bg-[#e08e10] cursor-pointer"
                       required>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex gap-4 mt-8">
                <button type="submit" class="bg-[#F9A826] text-white px-10 py-3 rounded-full font-bold shadow-lg hover:bg-[#e08e10] transition transform hover:-translate-y-1">
                    Simpan
                </button>
                <a href="<?php echo e(route('admin.menu.index')); ?>" class="bg-[#F9A826] text-white px-10 py-3 rounded-full font-bold shadow-lg hover:bg-[#e08e10] transition transform hover:-translate-y-1 text-center">
                    Kembali
                </a>
            </div>

        </form>
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\semilir\resources\views/admin/menu/create.blade.php ENDPATH**/ ?>