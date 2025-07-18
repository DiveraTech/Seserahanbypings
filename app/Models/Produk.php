<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
     protected $table = 'm_produk';
     protected $fillable = [
        'nama',
        'kategori',
        'stok',
        'deskripsi',
        'gambar',
        'status',
     ];
    public function harga()
    {
        return $this->hasMany(ProdukHarga::class, 'product_id');
    }
    // public function transaksi()
    // {
    //     return $this->belongsToMany(Transaksi::class);
    // }
}
