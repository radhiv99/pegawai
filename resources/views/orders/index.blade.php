@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Data Orders</h4>
            <div class="">
                <a href="{{ route('orders.create') }}" class="btn btn-primary">Tambah Order</a>
            </div>
        </div>
        <div class="card-body my-2">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Order Date</th>
                        <th>Pickup Date</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->customer->name }}</td>
                        <td>{{ $item->order_date }}</td>
                        <td>{{ $item->pickup_date }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->payment }}</td>
                        <td>{{ $item->total_amount }}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Aksi
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ route('orders.edit', $item->id) }}">Edit</a></li>
                                  <li><button type="button" class="btn text-danger" data-bs-toggle="modal" data-bs-target="#confirmasiDeleteModal{{ $item->id }}">
                                        Delete</button></li>
                                </ul>
                              </div>

                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection
