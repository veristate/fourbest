<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use HasFactory;
    protected $table = 'salesorder';
    protected $fillable = ['salesorderID', 'nama', 'total'];

    public function sales()
    {
        return $this->hasMany('App\Models\Sales');
    }
}
