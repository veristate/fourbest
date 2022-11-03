<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function inputSupplier()
    {
        return view('inputSupplier');
    }

    public function insertSupplier(Request $request)
    {
        $this->validate(
            $request,
            [
                'supplierName' => 'required'
            ],
            [
                'supplierName.required' => 'Tidak Boleh Kosong !'
            ]
        );

        Supplier::create([
            'supplierName' => $request->supplierName
        ]);
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }

    public function deleteSupplier(Request $request)
    {
        Supplier::destroy($request->supplierID);
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }

    public function editSupplier($id)
    {
        $supplier = Supplier::where('supplierID', $id)->first()->getOriginal();
        return view('editSupplier', compact('supplier'));
    }

    public function updateSupplier(Request $request)
    {
        $supplier = Supplier::where('supplierID', $request->supplierID);
        $supplier->update([
            'supplierName' => $request->supplierName
        ]);
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }
}
