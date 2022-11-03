@extends('master')

@section('content')

<div class="container">
    <form action="/insertCustomer" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="customerName">Nama Customer</label>
            <input type="text" class="form-control" name="customerName" id="customerName" placeholder="Masukkan Nama Customer">
            @error('customerName')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection