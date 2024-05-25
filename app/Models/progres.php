<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progres extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'progres';
    protected $primaryKey = 'id_progres';
    protected $fillable = [
        'kemajuan',
        '1',
        '2',
        '3',
        '5',
        '6',
        '7',
        '4',
        'dibatalkan'
    ];
}
