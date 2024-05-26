<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promosi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'promosi';
    protected $primaryKey = 'id_promosi';
    protected $fillable = [
        'nama_usaha',
        'nomor_telepon',
        'nama_produk',
        'foto_produk',
        'deskripsi_produk',
        'harga'
    ];
}
