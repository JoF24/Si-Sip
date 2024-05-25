<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kemajuan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kemajuan';
    protected $primaryKey = 'id_kemajuan';
}
