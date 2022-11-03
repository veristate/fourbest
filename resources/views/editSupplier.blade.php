@extends('master')

@section('content')

<div class="container">
    <form action="/updateSupplier" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="supplierName">Nama Supplier</label>
            <input type="text" class="form-control" name="supplierName" id="supplierName" value="{{$supplier['supplierName']}}">
            @error('supplierName')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <input type="hidden" name="supplierID" id="supplierID" value="{{$supplier['supplierID']}}">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection