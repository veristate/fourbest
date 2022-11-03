@extends('master')

@section('content')

<div class="container">
    <form action="/insertBarang" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="barangName">Nama Barang</label>
            <input type="text" class="form-control" name="barangName" id="barangName" placeholder="Masukkan Nama Barang">
            @error('barangName')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection