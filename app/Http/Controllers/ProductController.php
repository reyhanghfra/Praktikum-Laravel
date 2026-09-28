<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Mengambil seluruh data dari model Product
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    // Memvalidasi input data barang lalu menyimpannya ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code'  => ['required', 'string', 'unique:products,code'],
            'name'  => ['required', 'string'],
            'price' => ['required', 'integer'],
            'stock' => ['required', 'integer'],
        ]);

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}