<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menambah_video extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pelatihan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'deskripsi_video',
        'video',
        'gambar',
        'kategori',
    ];
}

