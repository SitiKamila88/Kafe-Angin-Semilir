<?php

use Illuminate\Support\Facades\Route; 
// Route: dipakai untuk bikin alamat URL

use App\Http\Controllers\MenuController; 
// MenuController: controller untuk halaman menu (pengunjung)

use App\Http\Controllers\AdminMenuController; 
// AdminMenuController: controller untuk kelola menu di dashboard admin

use App\Http\Controllers\AdminAuthController; 
// AdminAuthController: controller untuk login/logout admin

use App\Http\Middleware\AdminMiddleware; 
// AdminMiddleware: pengecek apakah user sudah login sebagai admin
// kalau belum login → tidak boleh masuk area admin


/*
|--------------------------------------------------------------------------
| HALAMAN PENGUNJUNG (PUBLIC)
|-------------------------------------------------------------------------- 
*/

// Jika orang buka website utama "/"
Route::get('/', function () { 
    return view('kafe');  
    // Menampilkan file tampilan (view) bernama "kafe.blade.php"
});

// Jika orang buka "/profil"
Route::get('/profil', function () { 
    return view('profil'); 
    // Menampilkan halaman profil
});

// Jika buka "/kontak"
Route::get('/kontak', function () { 
    return view('kontak'); 
});

// Jika buka "/testimoni"
Route::get('/testimoni', function () { 
    return view('testimoni'); 
});

// Jika buka "/menu"
Route::get('/menu', [MenuController::class, 'index']);
// Memanggil fungsi "index" di MenuController
// Biasanya menampilkan daftar menu makanan/minuman


/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|-------------------------------------------------------------------------- 
*/

// Buka FORM LOGIN admin → "/admin/login"
Route::get('/admin/login', [AdminAuthController::class, 'loginForm'])
    ->name('admin.login');
// loginForm = fungsi untuk menampilkan halaman login
// name() = memberi nama route (dipakai utk route())

// Mengirim FORM LOGIN (POST artinya kirim data)
Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');
// login() = memproses username & password


/*
|--------------------------------------------------------------------------
| AREA ADMIN (HARUS LOGIN DULU)
|-------------------------------------------------------------------------- 
*/

Route::middleware([AdminMiddleware::class]) 
// middleware = pemeriksa (cek login admin)
// kalau belum login → langsung disuruh ke halaman login

    ->prefix('admin') 
    // prefix = menambahkan kata "admin/" di depan semua URL di dalam group ini

    ->group(function () {

        // Jika berhasil login → tampil halaman sukses
        Route::get('/success', function () {
            return view('admin.success');
            // tampilkan view admin.success
        })->name('admin.login.success');

        // Dashboard admin → "/admin"
        Route::get('/', function () { 
            return "WELCOME ADMIN - Silakan Kelola Menu"; 
            // Ini cuma teks biasa, nanti bisa diganti view dashboard
        })->name('admin.dashboard');


        /*
        |-----------------------------
        | CRUD MENU ADMIN
        |-----------------------------
        */

        // Tampilkan list menu → "/admin/menu"
        Route::get('/menu', [AdminMenuController::class, 'index'])
            ->name('admin.menu.index');
        // index() = menampilkan semua menu di tabel admin

        // Tampilkan form tambah menu → "/admin/menu/create"
        Route::get('/menu/create', [AdminMenuController::class, 'create'])
            ->name('admin.menu.create');
        // create() = halaman form untuk input menu baru

        // Proses menyimpan menu → "/admin/menu" (POST = kirim data)
        Route::post('/menu', [AdminMenuController::class, 'store'])
            ->name('admin.menu.store');
        // store() = menyimpan data menu ke database

        // Tampilkan form edit menu → "/admin/menu/{id}/edit"
        Route::get('/menu/{id}/edit', [AdminMenuController::class, 'edit'])
            ->name('admin.menu.edit');
        // {id} = parameter (ID menu yang mau di-edit)
        // edit(id) = menampilkan form edit dengan data lama

        // Proses update menu → "/admin/menu/{id}" (PUT = update)
        Route::put('/menu/{id}', [AdminMenuController::class, 'update'])
            ->name('admin.menu.update');
        // update(id) = menyimpan perubahan data ke database

        // Proses hapus menu → "/admin/menu/{id}" (DELETE)
        Route::delete('/menu/{id}', [AdminMenuController::class, 'destroy'])
            ->name('admin.menu.destroy');
        // destroy(id) = menghapus menu dari database


        /*
        |-----------------------------
        | LOGOUT ADMIN
        |-----------------------------
        */

        // Logout admin → "/admin/logout"
        Route::post('/logout', [AdminAuthController::class, 'logout'])
            ->name('admin.logout');
        // logout() = menghapus session admin lalu redirect ke login
    });