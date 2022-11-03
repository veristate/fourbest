@extends('master')

@section('content')

<div class="container">
    <form action="/updateCustomer" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="customerName">Nama Customer</label>
            <input type="text" class="form-control" name="customerName" id="customerName" value="{{$customer['customerName']}}">
            @error('customerName')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <input type="hidden" name="customerID" id="customerID" value="{{$customer['customerID']}}">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection