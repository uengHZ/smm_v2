<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = "item";
    protected $fillable = [
        'item_no', 'item', 'lokasi', 'satuan', 'standard_price', 'created_at', 'updated_at'
    ];
}
