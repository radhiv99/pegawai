<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $ayanan = layanan::all();
        return view('layanan.index', compact('layanan'));
    }
}
