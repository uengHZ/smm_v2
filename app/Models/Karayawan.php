<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karayawan extends Model
{
    use HasFactory;
    protected $table = "karyawan";
    protected $fillable = [
        'nik', 'nama', 'departemen', 'created_at', 'updated_at'
    ];
}
