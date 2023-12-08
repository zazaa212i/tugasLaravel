<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','harga_barang','jumlah_barang'];
    protected $table = 'penjualan';
    public $timestamps = false;
}
