<?php

namespace App\Http\Controllers;

use App\Data\ProdukDummy;

class HalamanController extends Controller
{
    public function home()
    {
        $produkPopuler = ProdukDummy::semua();

        return view('front-office.home', compact('produkPopuler'));
    }

    // public function kontak()
    // {
    //     return view(' user_front.kontak');
    // }
}
