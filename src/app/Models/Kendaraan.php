<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun_keluaran', 'warna', 'harga', 'jenis_kendaraan', 'nama_kendaraan', 'spesifikasi', 'stok'
    ];
}
