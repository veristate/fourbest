@extends('master')

@section('content')

<div class="container">
    <form action="/updateBarang" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="barangName">Nama Barang</label>
            <input type="text" class="form-control" name="barangName" id="barangName" value="{{$barang['barangName']}}">
            @error('barangName')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <input type="hidden" name="barangID" id="barangID" value="{{$barang['barangID']}}">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection