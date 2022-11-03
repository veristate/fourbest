<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    protected $table = 'purchaseorder';
    protected $fillable = ['purchaseorderID', 'nama', 'total'];

    public function purchase()
    {
        return $this->hasMany('App\Models\Purchase');
    }
}
