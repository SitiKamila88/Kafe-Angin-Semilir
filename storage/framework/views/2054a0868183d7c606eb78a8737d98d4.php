<!-- DOCTYPE dan Struktur HTML Dasar -->
<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Meta Tags dan Judul Halaman -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Menu - Kafe Angin Semilir</title>

    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Google (Baloo Bhaijaan dan Figtree) -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        html { scroll-behavior: smooth; }

        /* Pengaturan Font Global */
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
</head>
<body class="bg-[#FFFBF5] min-h-screen p-6">

    <!-- Navbar Utama -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-10 px-4">
        <!-- Logo dan Judul Kafe -->
        <div class="flex items-center gap-3 mb-4 md:mb-0">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" class="w-10 h-10 rounded-full object-cover shadow-md border border-[#F9A826]">
            <h1 class="text-2xl font-bold text-black">Kafe Angin Semilir</h1>
        </div>

        <!-- Menu Navigasi (Bentuk Pill) -->
        <div class="flex gap-3">
            <a href="<?php echo e(url('/')); ?>" class="px-6 py-2 rounded-full bg-white text-gray-600 font-semibold shadow-sm hover:bg-gray-100 transition text-sm flex items-center">
                Beranda
            </a>
            <div class="px-6 py-2 rounded-full bg-[#F9A826] text-white font-bold shadow-md text-sm flex items-center">
                Edit Menu
            </div>
            <form action="<?php echo e(route('admin.logout')); ?>" method="POST" class="inline">
                <?php echo csrf_field(); ?>
                <button type="submit" class="px-6 py-2 rounded-full bg-[#F9A826] text-white font-bold shadow-md hover:bg-[#F9A826] transition text-sm flex items-center">
                    Keluar
                </button>
            </form>
        </div>
    </div>

    <!-- Tombol Tambah Data Menu -->
    <div class="mb-6 px-2">
        <a href="<?php echo e(route('admin.menu.create')); ?>" class="inline-flex items-center gap-2 bg-[#F9A826] text-white px-6 py-3 rounded-full font-bold shadow-lg hover:bg-[#e08e10] transition transform hover:-translate-y-1">
            <span>+</span> Tambah Data Menu
        </a>
    </div>

    <!-- Kontainer Kartu Utama -->
    <div class="bg-white rounded-[30px] shadow-xl p-8 md:p-10 min-h-[600px] relative">

        <!-- Judul Halaman -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-black">
                Edit Menu <span class="text-[#F9A826]">Kafe Angin Semilir</span>
            </h2>
        </div>

        <!-- Notifikasi Sukses -->
        <?php if(session('success')): ?>
            <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-r shadow-sm flex justify-between items-center">
                <span><?php echo e(session('success')); ?></span>
                <button onclick="this.parentElement.remove()" class="text-green-700 font-bold">&times;</button>
            </div>
        <?php endif; ?>

        <!-- Background Blob Glow Effect -->
    <!-- Blob Tengah Besar -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-orange-400/20 rounded-full blur-[120px] blob-animate pointer-events-none z-0"></div>

    <!-- Blob Pojok Kanan Atas -->
    <div class="absolute -top-20 -right-20 w-[500px] h-[500px] bg-orange-300/30 rounded-full blur-[100px] blob-animate-slow pointer-events-none z-0"></div>

    <!-- Blob Pojok Kiri Bawah -->
    <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-orange-300/30 rounded-full blur-[100px] blob-animate pointer-events-none z-0"></div>

        <!-- Tabel Data Menu -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-[#F9A826] text-black text-sm uppercase tracking-wider text-center">
                        <th class="py-4 px-4 rounded-tl-xl rounded-bl-xl">ID</th>
                        <th class="py-4 px-4">Gambar</th>
                        <th class="py-4 px-4 text-left">Nama Menu</th>
                        <th class="py-4 px-4">Harga</th>
                        <th class="py-4 px-4 text-left w-1/3">Deskripsi</th>
                        <th class="py-4 px-4">Kategori</th>
                        <th class="py-4 px-4"></th>
                        <th class="py-4 px-4 rounded-tr-xl rounded-br-xl">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    <?php $__empty_1 = true; $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <!-- Baris Zebra Striping -->
                        <tr class="<?php echo e($loop->even ? 'bg-[#FFF6E5]' : 'bg-white'); ?> border-b border-gray-100 hover:bg-orange-50 transition">

                            <!-- Kolom ID -->
                            <td class="py-4 px-4 text-center font-bold"><?php echo e($index + 1); ?></td>

                            <!-- Kolom Gambar Bulat -->
                            <td class="py-4 px-4 text-center">
                                <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-white shadow-md mx-auto">
                                    <?php if($menu->foto): ?>
                                        <img src="<?php echo e(asset('foto_menu/' . $menu->foto)); ?>" class="w-full h-full object-cover">
                                    <?php else: ?>
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center text-xs text-gray-500">No IMG</div>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <!-- Kolom Nama Menu -->
                            <td class="py-4 px-4 font-semibold text-gray-800"><?php echo e($menu->nama); ?></td>

                            <!-- Kolom Harga (Format Rupiah) -->
                            <td class="py-4 px-4 text-center font-bold text-gray-900">
                                <?php echo e(number_format($menu->harga / 1000, 0)); ?>k
                            </td>

                            <!-- Kolom Deskripsi -->
                            <td class="py-4 px-4 text-gray-600 text-xs leading-relaxed">
                                <?php echo e(Str::limit($menu->deskripsi, 80)); ?>

                            </td>

                            <!-- Kolom Kategori -->
                            <td class="py-4 px-4 text-center font-medium">
                                <?php echo e(ucfirst($menu->kategori)); ?>

                            </td>

                            <!-- Kolom Terlaris (Kosong) -->
                            <td class="py-4 px-4 text-center">
                            </td>

                            <!-- Kolom Aksi (Edit & Hapus) -->
                            <td class="py-4 px-4 text-center">
                                <div class="flex justify-center gap-2">
                                    <!-- Tombol Edit -->
                                    <a href="<?php echo e(route('admin.menu.edit', $menu->id)); ?>" class="w-9 h-9 rounded bg-[#FFD700] text-black flex items-center justify-center shadow-sm hover:bg-yellow-400 transition">
                                        <i class="fas fa-pen"></i>
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="<?php echo e(route('admin.menu.destroy', $menu->id)); ?>" method="POST" class="inline">
                                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                        <button onclick="return confirm('Yakin hapus menu ini?')" class="w-9 h-9 rounded bg-[#DC2626] text-white flex items-center justify-center shadow-sm hover:bg-red-700 transition">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <!-- Pesan Jika Tidak Ada Data -->
                        <tr>
                            <td colspan="8" class="py-10 text-center text-gray-500 italic bg-gray-50 rounded-lg">
                                Belum ada data menu. Silakan tambah data baru.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
<?php /**PATH C:\laragon\www\semilir2\resources\views/admin/menu/index.blade.php ENDPATH**/ ?>