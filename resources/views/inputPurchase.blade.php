@extends('master')

@section('content')

<div class="container">
    <form name="addProduct" id="addProduct" action="/insertPurchaseOrder" method="POST" enctype="multipart/form-data">
    <!-- <form action="/insertPurchaseOrder" method="POST" enctype="multipart/form-data"> -->
        @csrf
        <div class="form-group">
            <label for="supplierID">Pilih Supplier</label>
            <select class="form-control" name="supplierID" id="supplierID">
                <option disable selected>--select category--</option>
                @foreach($supplier as $s)
                <option value="{{$s->supplierID}}">{{$s->supplierName}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Pilih Barang</label>
            <div class="table-responsive">
                <table class='table table-bordered' id='dynamic_field'>
                    <tr>
                        <td>
                            <select class="form-control" name="barangID[]" id="barangID">
                                <option disable selected>--select category--</option>
                                @foreach($barang as $b)
                                <option value="{{$b->barangID}}">{{$b->barangName}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="text" name='harga[]' id='harga' placeholder='Masukan Harga' class='form-control name_list'>
                        </td>
                        <td>
                            <input type="text" name='quantity[]' id='quantity' placeholder='Masukan Jumlah' class='form-control name_list'>
                        </td>
                        <td>
                            <button name='add' id='add' class='btn btn-success'>Add More</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <input type="hidden" id="purchaseOrderID" name="purchaseOrderID" value='{{$po["purchaseOrderID"]}}'>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function(){  
    var i=1;  
    $('#add').click(function(){  
        event.preventDefault();
        i++;  
        $('#dynamic_field').append('<tr id="row'+i+'"><td><select class="form-control" name="barangID[]" id="barangID"><option disable selected>--select category--</option>@foreach($barang as $b)<option value="{{$b->barangID}}">{{$b->barangName}}</option>@endforeach</select></td><td><input type="text" name="harga[]" id="harga" placeholder="Masukan Harga" class="form-control name_list"></td><td><input type="text" name="quantity[]" id="quantity" placeholder="Masukan Jumlah" class="form-control name_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
    });  
    $(document).on('click', '.btn_remove', function(){  
        var button_id = $(this).attr("id");   
        $('#row'+button_id+'').remove();  
    });  
    $('#form').submit(function(){  
        event.preventDefault();
        var formData = {
            supplierID: $("#supplierID").val(),
            barangID: $("#barangID[]").val(),
            harga: $("#harga[]").val(),
            quantity: $("#quantity[]").val(),
            purchaseOrderID: $("#purchaseOrderID").val()
        };       
        $.ajax({  
            url: host+'/insertPurchaseOrder',  
            method:"POST",  
            data:formData,  
            success:function(data)  
            {  
                alert(data);  
            }  
        });  
    });  
});
</script>
@endsection