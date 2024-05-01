<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edit_video extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pelatihan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'judul',
        'deskripsi_video',
        'video',
        'status',        
        'gambar',
        'kategori',
        'tanggal_aktif',
        'tanggal_nonaktif',
    ];
}
