<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // Ini adalah data produknya
    $produk = [
        ['nama' => 'Kopi Arabika', 'kategori' => 'Minuman', 'harga' => 25000, 'stok' => 10],
        ['nama' => 'Roti Bakar', 'kategori' => 'Makanan', 'harga' => 15000, 'stok' => 0],
        ['nama' => 'Teh Manis', 'kategori' => 'Minuman', 'harga' => 5000, 'stok' => 20],
        ['nama' => 'Nasi Goreng', 'kategori' => 'Makanan', 'harga' => 20000, 'stok' => 5],
    ];

    // Panggil file katalog/index.blade.php dan kirim datanya
    return view('katalog.index', compact('produk'));
});
