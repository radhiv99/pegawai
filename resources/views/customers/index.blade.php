@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Data Customers</h4>
            <div class="">
                <a href="{{ route('customers.create') }}" class="btn btn-primary">Tambah Customer</a>
            </div>
        </div>
        <div class="card-body my-2">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->no_telepon }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Aksi
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ route('customers.edit', $item->id) }}">Edit</a></li>
                                  <li>
                                    <button type="button" class="btn text-danger" data-bs-toggle="modal" data-bs-target="#confirmasiDeleteModal{{ $item->id }}">
                                        Delete</button>
                                    </li>
                                </ul>
                              </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
