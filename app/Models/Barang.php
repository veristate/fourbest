<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $primaryKey = 'barangID';
    public $timestamps = false;
    protected $table = 'barang';
    protected $fillable = ['barangID', 'barangName'];
}
