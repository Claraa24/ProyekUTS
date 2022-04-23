<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class daftarController extends Controller
{
    public function index(){
        return view('frontend.daftar_produk',[
            'products' => Product::all()
        ]);
    }
}
