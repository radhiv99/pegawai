@extends('layouts.mantis')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Edit Data Laundri</h4>
            <div>
                <a href="{{ route('laundri.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('laundri.update', $laundri->id) }}" method="POST" class="">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           value="{{ $laundri->name }}" id="name" name="name" placeholder="Enter name" autofocus>
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" 
                           value="{{ $laundri->address }}" id="address" name="address" placeholder="Enter address">
                    @error('address')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                           value="{{ $laundri->phone }}" id="phone" name="phone" placeholder="Enter phone number">
                    @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           id="email" name="email" value="{{ $laundri->email }}" placeholder="Enter email">
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="type" class="form-select @error('type') is-invalid @enderror">
                        <option value="self_service" {{ $laundri->type == 'self_service' ? 'selected' : '' }}>Self Service</option>
                        <option value="full_service" {{ $laundri->type == 'full_service' ? 'selected' : '' }}>Full Service</option>
                    </select>
                    @error('type')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="opening_time" class="form-label">Opening Time</label>
                    <input type="date" class="form-control @error('opening_time') is-invalid @enderror" 
                           id="opening_time" name="opening_time" value="{{ $laundri->opening_time }}">
                    @error('opening_time')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="closing_time" class="form-label">Closing Time</label>
                    <input type="date" class="form-control @error('closing_time') is-invalid @enderror" 
                           id="closing_time" name="closing_time" value="{{ $laundri->closing_time }}">
                    @error('closing_time')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="my-2 d-flex justify-content-end">
                    <button class="btn btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection