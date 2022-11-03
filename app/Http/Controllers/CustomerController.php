<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Barang;
use DB;

class CustomerController extends Controller
{

    public function getCustomer()
    {
        $customer = Customer::all();
        $supplier = Supplier::all();
        $barang = Barang::all();
        return view('index',compact('customer', 'supplier', 'barang'));
    }

    public function inputCustomer()
    {
        return view('inputCustomer');
    }

    public function insertCustomer(Request $request)
    {
        $this->validate(
            $request,
            [
                'customerName' => 'required'
            ],
            [
                'customerName.required' => 'Tidak Boleh Kosong !'
            ]
        );

        Customer::create([
            'customerName' => $request->customerName
        ]);
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }

    public function deleteCustomer(Request $request)
    {
        Customer::destroy($request->customerID);
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }

    public function editCustomer($id)
    {
        $customer = Customer::where('customerID', $id)->first()->getOriginal();
        return view('editCustomer', compact('customer'));
    }

    public function updateCustomer(Request $request)
    {
        $customer = Customer::where('customerID', $request->customerID);
        $customer->update([
            'customerName' => $request->customerName
        ]);
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }
}
