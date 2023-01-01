<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'stock_barang',
        'harga_barang'
    ];
    public $timestamps = false;
    protected $primaryKey = "kode_barang";
}
