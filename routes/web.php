<?php

use Illuminate\Support\Facades\Route;
use App\Models\laundri;
use Illuminate\Support\Facades\Auth;
use App\Models\customers;
use App\Models\orders;
use App\Models\detail_transaksi;
use App\Models\layanan;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('laundri', App\Http\Controllers\LaundriController::class);
Route::resource('customers', App\Http\Controllers\CustomersController::class);
Route::resource('orders', App\Http\Controllers\OrdersController::class);
Route::resource('detail_transaksi', App\Http\Controllers\DetailTransaksiController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tambah', function () {
    $customers = customers::find(1);
    $customers->orders()->create([
        'order_date' => now(),
        'pickup_date' => now()->addDays(2),
        'status' => 'pending',
        'payment' => 'cash',
        'total_amount' => 100000,
    ]);
    return 'Data berhasil ditambahkan';
});

Route::get('/tambah-detail', function () {
    $order = orders::find(1);
    $order->detail_transaksi()->create([
        'layanan_id' => 1,
        'berat' => 2,
        'subtotal' => 20000,
    ]);
    return 'Data detail transaksi berhasil ditambahkan';
});

Route::get('/tampil', function () {
    $customers = customers::with('orders')->get();
    dd($customers);
});
    
