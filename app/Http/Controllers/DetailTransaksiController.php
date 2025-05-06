<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail_transaksi;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        $detail_transaksi = detail_transaksi::with(['order', 'layanan'])->get();
        return view('detail_transaksi.index', compact('detail_transaksi'));
    }

}
