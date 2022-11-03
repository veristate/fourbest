<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $primaryKey = 'supplierID';
    public $timestamps = false;
    protected $table = 'supplier';
    protected $fillable = ['supplierID', 'supplierName'];

    public function barang()
    {
        return $this->hasMany('App\Models\Barang');
    }
}
