<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'purchase';
    protected $fillable = ['purchaseID', 'harga', 'quantity', 'total',  'barangID', 'purchaseorderID', 'supplierID'];

    public function purchaseorder()
    {
        return $this->belongsTo('App\Models\PurchaseOrder');
    }
}
