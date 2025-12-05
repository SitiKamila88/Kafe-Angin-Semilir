<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
// Ganti facade Storage jadi File karena kita mau main manual di public
use Illuminate\Support\Facades\File;

class AdminMenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $menu = new Menu();
        $menu->nama = $request->nama;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;
        $menu->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // --- PERBAIKAN DISINI ---
            $file = $request->file('foto');
            // Bikin nama file unik (misal: 170988_bakso.jpg)
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // Pindahkan file ke folder public/foto_menu
            $file->move(public_path('foto_menu'), $nama_file);

            // Simpan nama file aja ke database
            $menu->foto = $nama_file;
        }

        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $menu->nama = $request->nama;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;
        $menu->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // Hapus foto lama kalau ada di folder public/foto_menu
            $path_lama = public_path('foto_menu/' . $menu->foto);
            if (File::exists($path_lama)) {
                File::delete($path_lama);
            }

            // Simpan foto baru
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('foto_menu'), $nama_file);

            $menu->foto = $nama_file;
        }

        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil diupdate!');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        // Hapus file fisik di folder public/foto_menu
        if ($menu->foto) {
            $path_lama = public_path('foto_menu/' . $menu->foto);
            if (File::exists($path_lama)) {
                File::delete($path_lama);
            }
        }

        $menu->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Menu dihapus!');
    }
}
