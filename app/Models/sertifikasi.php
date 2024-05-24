<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sertifikasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sertifikasi';
    protected $primaryKey = 'id_sertifikasi';
    protected $fillable = [
        'nama_produk',
        'nama_petani',
        'id_fasilitator',
        'izin_usaha',
        'foto_produk',
        'video_proses_produk',
        'bahan_digunakan',
        'alat_digunakan',
        'id_status',
        'id_progres'
    ];
}
