<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Supplier;

class BarangController extends Controller
{
    public function inputBarang()
    {
        return view('inputBarang');
    }

    public function insertBarang(Request $request)
    {
        $this->validate(
            $request,
            [
                'barangName' => 'required'
            ],
            [
                'barangName.required' => 'Tidak Boleh Kosong !'
            ]
        );

        Barang::create([
            'barangName' => $request->barangName
        ]);
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }

    public function deleteBarang(Request $request)
    {
        Barang::destroy($request->barangID);
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }

    public function editBarang($id)
    {
        $barang = Barang::where('barangID', $id)->first()->getOriginal();
        return view('editBarang', compact('barang'));
    }

    public function updateBarang(Request $request)
    {
        $barang = Barang::where('barangID', $request->barangID);
        $barang->update([
            'barangName' => $request->barangName
        ]);
        return redirect()->action([CustomerController::class, 'getCustomer']);
    }
}
