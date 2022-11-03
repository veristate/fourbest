<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sales';
    protected $fillable = ['salesID', 'barangID', 'salesorderID', 'customerID'];

    public function salesorder()
    {
        return $this->belongsTo('App\Models\SalesOrder');
    }
}
