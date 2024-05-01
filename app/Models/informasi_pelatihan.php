<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasi_pelatihan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'informasi_pelatihan';
    protected $fillable = [
        'informasi',
    ];
}
