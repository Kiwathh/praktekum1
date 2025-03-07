<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            ['id' => 1, 'nama' => 'laptop', 'harga' => 10000000],
            ['id' => 2, 'nama' => 'hp', 'harga' => 20000000],
            ['id' => 3, 'nama' => 'komputer', 'harga' => 50000000]
        ];

        return view('produk.index', compact('produk'));
    }
}
