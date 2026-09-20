<?php

namespace App\Http\Controllers;

use App\Data\ProdukDummy;

class ProdukController extends Controller
{
    public function index()
    {
        $daftarProduk = ProdukDummy::semua();

        return view('front-office.products.index', compact('daftarProduk'));
    }

    public function show(int $id)
    {
        $produk = ProdukDummy::cari($id);

        // Kalau produk tidak ditemukan, tampilkan halaman 404
        abort_if($produk === null, 404);

        return view('front-office.products.show', compact('produk'));
    }
}
