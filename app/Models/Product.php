<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Nama tabel di database
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar'
    ]; // Kolom yang dapat diisi
}
