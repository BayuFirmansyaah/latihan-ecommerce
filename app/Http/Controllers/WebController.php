<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function detailProduk()
    {
        return view('produk.detail');
    }
}
