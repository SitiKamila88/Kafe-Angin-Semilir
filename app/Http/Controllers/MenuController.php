<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        // Ambil Makanan
        $makanans = Menu::where('kategori', 'makanan')->get();
        
        // Ambil Minuman
        $minumans = Menu::where('kategori', 'minuman')->get();
        
        // Kirim keduanya ke view
        return view('menu', compact('makanans', 'minumans'));
    }
}