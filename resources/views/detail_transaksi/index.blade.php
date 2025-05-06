@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Data Detail Transaksi</h4>

        </div>
        <div class="card-body my-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order</th>
                <th>Layanan</th>
                <th>Berat</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detail_transaksi as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>

                    <td>{{ $item->order->status ?? '-' }}</td>
                    <td>{{ $item->layanan->layanan_name ?? '-' }}</td>
                    <td>{{  $item->berat }}</td>
                    <td>{{  $item->subtotal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
 </div>
 @endsection
