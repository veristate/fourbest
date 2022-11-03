<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\Customer;
use App\Models\Purchase;
use App\Models\PurchaseOrder;
use App\Models\Sales;
use App\Models\SalesOrder;

class OrderController extends Controller
{
    public function inputPurchaseOrder()
    {
        $supplier = Supplier::all();
        $barang = Barang::all();
        PurchaseOrder::create([
            'nama' => 'test',
            'total' => '100'
        ]);
        $po = PurchaseOrder::latest()->first();
        return view('inputPurchase', compact('supplier', 'barang', 'po'));
    }

    public function inputSalesOrder()
    {
        return view('inputSalesOrder');
    }

    public function insertPurchaseOrder(Request $request)
    {

        $count = count($request->harga);
        dd($request);
        for ($i=0; $i<$count; $i++)
        {
            $this->validate(
                $request,
                [
                    'supplierID' => 'required',
                ],
                [
                    'supplierID.required' => 'Tidak Boleh Kosong !'
                ]
            );
            Purchase::create([
                'harga' => $request -> harga[$i],
                'quantity' => $request -> quantity[$i],
                'total' => $request -> harga[$i] * $request -> quantity[$i],
                'barangID' => $request -> barangID[$i],
                'purchaseOrderID' => $request -> purchaseOrderID
            ]);
        }
        

        
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }
}
