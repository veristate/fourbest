@extends('master')

@section('content')

<div class="container">
    <form action="/insertSupplier" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="supplierName">Nama Supplier</label>
            <input type="text" class="form-control" name="supplierName" id="supplierName" placeholder="Masukkan Nama Supplier">
            @error('supplierName')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection