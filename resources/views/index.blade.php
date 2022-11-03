@extends('master')

@section('content')

<table class="mt-3" style="width:100%">
    <tr>
        <th>Nama Customer</th>
    </tr>
    @foreach ($customer as $c)
    <tr>
        <td>{{$c->customerName}}</td>
        <td>
            <form action="{{ url('/editCustomer/'.$c->customerID)}}">
                <button class="btn btn-secondary">Edit</button>
            </form>
        </td>
        <td>
            <form action="/deleteCustomer" method="post">
                @csrf
                <input type="hidden" name="customerID" id="customerID" value="{{$c->customerID}}">
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<table class="mt-3" style="width:100%">
    <tr>
        <th>Nama Supplier</th>
    </tr>
    @foreach ($supplier as $s)
    <tr>
        <td>{{$s->supplierName}}</td>
        <td>
            <form action="{{ url('/editSupplier/'.$s->supplierID)}}">
                <button class="btn btn-secondary">Edit</button>
            </form>
        </td>
        <td>
            <form action="/deleteSupplier" method="post">
                @csrf
                <input type="hidden" name="supplierID" id="supplierID" value="{{$s->supplierID}}">
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<table class="mt-3" style="width:100%">
    <tr>
        <th>Nama Barang</th>
    </tr>
    @foreach ($barang as $b)
    <tr>
        <td>{{$b->barangName}}</td>
        <td>
            <form action="{{ url('/editBarang/'.$s->barangID)}}">
                <button class="btn btn-secondary">Edit</button>
            </form>
        </td>
        <td>
            <form action="/deleteBarang" method="post">
                @csrf
                <input type="hidden" name="barangID" id="barangID" value="{{$b->barangID}}">
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
