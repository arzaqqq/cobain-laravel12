<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produkarray = [
            [
            'id' => 1,
            'nama' => 'barang tes'
            ]
        ];

        $produk = Produk::all();

        return view('product.index' , compact('produkarray', 'produk'));
    }
}
